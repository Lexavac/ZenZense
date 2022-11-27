<?php

namespace App\Http\Controllers;

use App\Models\ShopProfile as ModelsShopProfile;
use Illuminate\Http\Request;

class ShopProfile extends Controller
{

    public function show($slug){

        $shop = ModelsShopProfile::where('slug', $slug)->first();

        $seller = $shop->users;

        $sellerdata = $seller->select('name','email')->first();

        $phone = $seller->profile->select('phoneNumber')->first();

        $products = $seller->products;

        return view('shop', compact(
            'shop',
            'sellerdata',
            'phone',
            'products'
        ));

    }
}
