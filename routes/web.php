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
    })->name('dashboard');

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