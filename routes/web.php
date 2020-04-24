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


Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'users'], function () {
        //admin/users
        Route::get('main', 'UserController@index');

        Route::get('add', 'UserController@add');

        Route::get('edit', 'UserController@edit');
    });
});
Route::get('/', function () {
    return view('welcome');
});