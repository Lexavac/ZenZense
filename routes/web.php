<?php

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/product', function () {
    return view('product');
})->name('product');

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

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/seller', function () {
    return view('seller.loginseller');
})->name('loginseller');

Route::get('/sellerreg', function () {
    return view('seller.regisseller');
})->name('regisseller');

Route::get('/profileseller', function () {
    return view('seller.profile');
})->name('profileseller');

Route::get('/profile', function () {
    return view('profilecust');
})->name('profile');

Route::get('/setting', function () {
    return view('setting');
})->name('setting');

Route::get('/editprofile', function () {
    return view('profileedit-cust');
})->name('editprofile');

Route::get('/createprofile', function () {
    return view('create-profile');
})->name('create-profile');

Route::get('/profileedit', function () {
    return view('seller.profile-edit');
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
    return view('seller.upcoming');
})->name('upcoming');

Route::get('/processed', function () {
    return view('seller.processed');
})->name('processed');

Route::get('/completed', function () {
    return view('seller.complete-order');
})->name('completed');

Route::get('/canceled', function () {
    return view('seller.canceled-order');
})->name('canceled');

Route::get('/report', function () {
    return view('seller.report');
})->name('report');

Route::get('/monthlyreport', function () {
    return view('seller.monthly-report');
})->name('monthly-report');
