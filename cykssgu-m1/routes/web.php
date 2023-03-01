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

Route::get('/katalog',[App\Http\Controllers\Group::class, 'GroupUs' ])->name('katalog');

Route::get('/about',[App\Http\Controllers\AboutUs::class, 'slider' ])->name('about');

