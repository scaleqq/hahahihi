<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;

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

Route::get('/map', function () {
    return view('map');
});
Route::get('/katalog', function () {
    return view('katalog');
});
Route::get('/about', function () {
    return view('about');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/katalog',[App\Http\Controllers\ShowController::class, 'shows' ])->name('katalog');

Route::get('/about',[App\Http\Controllers\ShowController::class, 'slider' ])->name('about');

Route::get('/katalog/{id}',[App\Http\Controllers\ShowController::class, 'productcards' ]);

Route::post('/cart/add', 'CartController@addItem')->name('cart.add');

Route::get('/cart', 'CartController@showCart')->name('cart.show');

Route::post('/cart/remove/{productId}', 'CartController@removeItem')->name('cart.remove');
