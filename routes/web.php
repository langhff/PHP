<?php

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

Auth::routes([
    'reset' => false,
    'confirm' => false,
]);

Route::middleware(['auth']) -> group(function () {

    Route::group([
        'prefix' => 'person',
        'namespace' => 'App\Http\Controllers\Person',
        'as' => 'person.',
    ], function () {
        Route::get('/orders', 'OrderController@orders')->name('orders.index');
        Route::get('/orders/{order}', 'OrderController@show')->name('orders.show');
    });

    Route::group([
        'middleware' => ['is_admin'],
        'prefix' => 'admin',
        'namespace' => 'App\Http\Controllers\Admin',
    ], function () {
        Route::get('/orders', 'OrderController@orders')->name('orders');
        Route::get('/orders/{order}', 'OrderController@show')->name('orders.show');
        Route::resource('categories', 'CategoryController');
        Route::resource('products', 'ProductController');
    });
});





Route::get('/', 'App\Http\Controllers\MainController@main')->name('main');
Route::get('/c', 'App\Http\Controllers\MainController@catalog')->name('catalog');
Route::get('/p/{product?}', 'App\Http\Controllers\MainController@product')->name('product');

Route::group(['prefix' => 'cart'], function () {
    Route::post('/add/{id}', 'App\Http\Controllers\BasketController@cartAdd')->name('cart-add');

    Route::group(['middleware' => 'cart_not_empty'], function () {
        Route::get('/', 'App\Http\Controllers\BasketController@cart')->name('cart');
        Route::post('/remove/{id}/{all?}', 'App\Http\Controllers\BasketController@cartRemove')->name('cart-remove');
        Route::get('/checkout', 'App\Http\Controllers\BasketController@checkout')->name('checkout');
        Route::post('/confirm', 'App\Http\Controllers\BasketController@confirm')->name('confirm');
    });
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



