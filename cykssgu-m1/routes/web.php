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

Route::get('/about', function () {
    return view('/about');
});

Auth::routes();
Route::get('/where', function () {
    return view('/where');
});
Route::get('/catalog', function () {
    return view('/catalog');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/catalog', [App\Http\Controllers\Products::class, 'product'])->name('catalog');
