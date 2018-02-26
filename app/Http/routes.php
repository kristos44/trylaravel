<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// TODO pin controller name to group and in each other route use only method name and parameters if necesssary
Route::group(['prefix' => 'admin'], function () {
//    Route::get('', [
//        'as' => 'index', 'uses' => 'AdminController@index'
//    ]);
    Route::get('', 'AdminController@index')->name('adminindex');
});


Route::get('', 'SiteController@index')->name('index');
Route::get('/home', 'SiteController@index')->name('indexHome');
//Route::get('/oferta', 'EstateController@index')->name('index');

Route::group(['prefix' => 'oferta'], function () {
    Route::get('', 'EstateController@index')->name('indexEstate');
    Route::get('szczegoly/{id}', 'EstateController@show')->name('showEstate');
});
