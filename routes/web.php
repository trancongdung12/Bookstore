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

Route::get('/','ProductController@index');

Route::get('/addproduct', function () {
    return view('addproduct');
});
Route::post('/','ProductController@addpro');
Route::post('/delete/{id}','ProductController@delete');
Route::post('/edit/{id}','ProductController@edit');
Route::post('/update','ProductController@update');
