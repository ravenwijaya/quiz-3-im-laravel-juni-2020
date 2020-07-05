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
    return view('/item/home');
});
Route::get('/artikel', 'artikelController@index'); 
Route::get('/artikel/create', 'artikelController@create'); 
Route::post('/artikel', 'artikelController@store'); 
Route::get('/artikel/{id}', 'artikelController@show'); 
Route::get('/artikel/{id}/edit', 'artikelController@edit'); 
Route::put('/artikel/{id}', 'artikelController@update'); 
Route::delete('/artikel/{id}', 'artikelController@delete'); 
