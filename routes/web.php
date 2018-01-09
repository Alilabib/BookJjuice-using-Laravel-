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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',"adminController@home");

Route::get('/contact/{id}/{name}',"adminController@contact");
Route::get('/product',"ProductController@ViewProduct");
Route::get('/product/{id}',"ProductController@FindProduct");
Route::get('add',"ProductController@AddProduct");
Route::POST('add',"ProductController@AddProduct");
Route::get('add/{id}',"ProductController@DeleteProduct");
Route::get('edit/{id}',"ProductController@EditProduct");
Route::POST('edit/{id}',"ProductController@EditProduct");
