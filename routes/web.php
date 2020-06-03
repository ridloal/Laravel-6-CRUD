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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/nobita', 'NobitaController@index');
Route::get('/nobita/create', 'NobitaController@create');
Route::post('/nobita', 'NobitaController@store');
Route::get('/nobita/{nobita}', 'NobitaController@show');
Route::get('/nobita/{nobita}/edit', 'NobitaController@edit');
Route::put('/nobita/{nobita}', 'NobitaController@update');
Route::delete('/nobita/{nobita}', 'NobitaController@destroy');
