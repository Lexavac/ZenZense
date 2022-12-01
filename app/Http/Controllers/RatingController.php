<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Rating;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class RatingController extends Controller
{
    public function add(Request $request)
    {
        $stars_rated = $request->input('product_rating');
        $product_id = $request->input('product_id');
        $name = $request->input('name');
        $comment = $request->input('comment');

            Rating::insert([
                'user_id' => Auth::id(),
                'product_id' => $product_id,
                'name' => $name,
                'stars_rated' => $stars_rated,
                'comment' => $comment,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
            return redirect()->back();
    }
}