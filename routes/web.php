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
Route::get('get-categories','CategoryController@index');
Route::get('create-categories','CategoryController@create');
Route::post('store-categories','CategoryController@store');
Route::get('edit-categories/{id}','CategoryController@edit');
Route::post('update-categories/{id}','CategoryController@update');
Route::delete('delete-categories/{id}','CategoryController@destroy');
Route::get('show-categories/{id}','CategoryController@show');
