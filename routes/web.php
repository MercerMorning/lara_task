<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
Route::namespace('App\Http\Controllers')
    ->group(function () {
        Route::get('/', 'FrontController@home')->name('home');
        Route::get('/product/{product}', 'ProductController@show')->name('product.show');
        Route::get('/category/{category}', 'CategoryController@show')->name('category.show');
        Route::get('/basket', 'BasketController@index')->name('basket.index');
        Route::put('/order/{product}', 'OrderController@create')->name('order.create')->middleware('hasAmount');
    });

//Route::get('/', 'FrontController@home');
