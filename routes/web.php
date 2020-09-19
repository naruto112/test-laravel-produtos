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

Route::get('/', '\App\Http\Controllers\ProdutosController@index');


Route::get('/produto', '\App\Http\Controllers\ProdutosController@product');
Route::get('/produto/{id}', '\App\Http\Controllers\ProdutosController@edit');

Route::post('/produto', '\App\Http\Controllers\ProdutosController@store');
Route::post('/produto/{id}', '\App\Http\Controllers\ProdutosController@saveByProdutct');

Route::get('/destroy/{id}', '\App\Http\Controllers\ProdutosController@destroy');
