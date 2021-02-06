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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', 'DrinkController@index')-> name('index');
Route::get('/show/{id}', 'DrinkController@show')-> name('show');
Route::get('/create', 'DrinkController@create')-> name('create');
Route::post('/store', 'DrinkController@store')-> name('store');
Route::get('/edit/{id}', 'DrinkController@edit')
    -> name('edit');
Route::post('/update/{id}', 'DrinkController@update')
    -> name('update');
Route::get('/delete/{id}', 'DrinkController@delete')
    -> name('delete');