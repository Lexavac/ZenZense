<?php

namespace App\Http\Controllers;
use App\Models\Rating;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function review()
    {
        $review = Rating::all();
        return view('detail',compact('review'));
    }
}
