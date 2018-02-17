<?php

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
//

//Route::get('/', function () {
//    $products = App\Product::all();
//    return view('home', compact('products'));
//});



Route::get('products/{product}', 'ProductController@show');
Route::resource('/','IndexController');
Route::get('/search/{searchKey}','IndexController@search');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::get('welcome', function () {
   return view('welcome');});
Route::get('products', function () {
    return view('products.products');});



