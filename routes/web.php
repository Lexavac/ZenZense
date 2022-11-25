<?php


use App\Http\Controllers\HControllerr;
use App\Http\Controllers\PController;
use App\Http\Controllers\SController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    Route::get('/', [HControllerr::class, 'index'])->name('HomePage');
    
    Route::get('/product/detail/{product:slug?}', [PController::class, 'show'])->name('product.show');
    
    // Route::get('/product', function () {
    //     return view('product');
    // })->name('product');

    Route::get('/product/{slug?}',[SController::class,'index'])->name('product');
    
    Route::get('/detail', function () {
        return view('detail');
    })->name('detail');
    
    Route::get('/cart', function () {
        return view('cart');
    })->name('cart');
    
    Route::get('/fav', function () {
        return view('fav');
    })->name('fav');
    
    Route::get('/shop', function () {
        return view('shop');
    })->name('shop');
    
    Route::get('/setting', function () {
        return view('dashboard');
    })->name('profile');

Auth::routes();

Route::resource('profile', UserProfileController::class);


Route::get('/seller', function () {
    return view('seller.loginseller');
})->name('loginseller');

Route::get('/sellerreg', function () {
    return view('seller.regisseller');
})->name('regisseller');

Route::group(['middleware' => ['auth','CheckLevel:admin,seller'],  'prefix' => 'seller',  'as' => 'seller.'],function(){
    Route::resource('shop-profile', ShopController::class);
});

//Store-IMG
Route::post('profile/image',[UserProfileController::class, 'storeImage']);
Route::post('shop-profile/image',[ShopController::class, 'storeImage']);


Route::get('/profileseller', function () {
    return view('seller.profile');
})->name('profileseller');

Route::get('/profile', function () {
    return view('profilecust');
})->name('profile');


Route::get('/editprofile', function () {
    return view('profileedit-cust');
})->name('editprofile');

Route::get('/createprofile', function () {
    return view('create-profile');
})->name('create-profile');

Route::get('/profileedit', function () {
    return view('profile.profile-edit');
})->name('profile-edit');

Route::get('/checkoutdetail', function () {
    return view('checkout-detail');
})->name('checkout-detail');

Route::get('/checkoutpayment', function () {
    return view('checkout-payment');
})->name('checkout-payment');

Route::get('/checkoutcomplete', function () {
    return view('checkout-complete');
})->name('checkout-complete');

Route::get('/productseller', function () {
    return view('seller.product-seller');
})->name('product-seller');


Route::get('/upcoming', function () {
    return view('upcoming');
})->name('upcoming');

Route::get('/upcomingS', function () {
    return view('seller.upcoming');
})->name('upcoming');

Route::get('/processed', function () {
    return view('seller.processed');
})->name('processed');
