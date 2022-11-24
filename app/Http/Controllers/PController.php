<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ShopProfile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PController extends Controller
{
    public function show(Product $product){

        $seller = User::find($product->users_id)->shop;

        // $seller = ShopProfile::where('users_id', $product->users_id)->first();

        $related_products = Product::whereHas('category', function ($query) use ($product) {
            $query->whereId($product->category_id);
        })
            ->where('id', '<>', $product->id)
            ->inRandomOrder()
            ->take(4)
            ->get(['id', 'slug', 'name', 'price']);

        return view('detail', compact('product',  'related_products', 'seller'));
    }
}
