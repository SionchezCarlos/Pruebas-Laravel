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

//Este proyecto cuenta con una instalacion de Laravel Telescope.

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::apiResource('pensamientos', 'pensamientoController');

Route::get('/CRUDArchivosAJAX/CrudArchivosAjax', 'CrudArchivosAjaxController@index');
Route::post('/CRUDArchivosAJAX/CrudArchivosAjax/store', 'CrudArchivosAjaxController@store');
