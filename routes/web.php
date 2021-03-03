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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'App\Http\Controllers\FrontController@home')->name('home');
Route::get('/product/{product}', 'App\Http\Controllers\ProductController@show')->name('product.show');
Route::get('/category/{category}', 'App\Http\Controllers\CategoryController@show')->name('category.show');
Route::put('/order/{product}', 'App\Http\Controllers\OrderController@create')->name('order.create')->middleware('hasAmount');
//Route::get('/', 'FrontController@home');
