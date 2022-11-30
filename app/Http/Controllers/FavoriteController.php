<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function add($products_id){

        $data = User::find(auth()->id())->favorite;


        return dd($data);

        $check = Favorite::where('users_id', Auth::id())->where('products_id', $products_id)->first();

        if($check){
            $check->delete();
            return 'Removed From Favorite!';
        }else{
            Favorite::insert([
                'users_id' => Auth::check(),
                'products_id' => $products_id
            ]);
            return 'Added to Favorite!';
        }

    }
}
