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
    //Categories
    Route::group(['prefix' => 'categories'], function () {
        Route::get('index','admin\CategoryController@index');
        Route::get('add','admin\CategoryController@create');
        Route::get('edit/{id}','admin\CategoryController@edit');
    });
    //User
    Route::group(['prefix' => 'users'], function () {
        Route::get('index','admin\UserController@index');
        Route::get('add','admin\UserController@create');
        Route::get('edit/{id}','admin\UserController@edit');
    });
    //Product
    Route::group(['prefix' => 'products'], function () {
        Route::get('index','admin\ProductController@index');
        Route::get('add','admin\ProductController@create');
        Route::get('edit/{id}','admin\ProductController@edit');
    });
});
