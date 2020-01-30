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

Route::get('/', 'NocticiaController@index')->name('front.noticias.index');
Route::get('/noticias/{id}', 'NocticiaController@show')->name('front.noticias.show');

Route::get('/admin', 'AdminController@dashboard')->name('admin.dashboard');

//Ruta para establecer las 7 rutas 
Route::resource('/admin/noticias', 'Admin\NoticiaController');

Auth::routes(['register' => false]);
//login
//logout
//register

