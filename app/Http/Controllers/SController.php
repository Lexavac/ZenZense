<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Tb_productcate;
use Illuminate\Http\Request;

class SController extends Controller
{
    public function index(Request $request,$slug = null){


        $products = Product::with('category');

        if($request->BRF != null){
            $products->orWhere('major','=', 'BRF');
        }

        if($request->PPLG != null){
            $products->orWhere('major','=', 'PPLG');
        }

        if($request->ANIMASI != null){
            $products->orWhere('major','=', 'ANIMASI');
        }

        if($request->TJKT != null){
            $products->orWhere('major','=', 'TJKT');
        }

        if($request->TE != null){
            $products->orWhere('major','=', 'TE');
        }

        if($request->min != null){
            $products->where('price', '>=', $request->min);
        }

        if($request->max != null){
            $products->where('price', '<=', $request->max);
        }

        if(!is_null($slug)){
            $category = Tb_productcate::whereSlug($slug)->firstOrFail();


            if (is_null($category->category_id)) {

                $categoriesIds = Tb_productcate::whereCategoryId($category->id)->pluck('id')->toArray();
                $categoriesIds[] = $category->id;


                $products = $products->whereHas('category', function ($query) use ($categoriesIds) {

                    $query->whereIn('id', $categoriesIds);
                });

            } else {
                $products = $products->whereHas('category', function ($query) use ($slug) {

                    $query->where([

                        'slug' => $slug,
                    ]);
                });

            }
        }

        $products = $products->paginate(8);

        return view('product',compact('products'));


    }

    public function tag(Request $request, $slug)
    {
        $products = Product::with('tags');

        $products = $products->whereHas('tags', function ($query) use($slug) {
            $query->where([
                'slug' => $slug,
            ]);
        })
        ->paginate(6);

        return view('product', compact('products','slug'));
    }
}
