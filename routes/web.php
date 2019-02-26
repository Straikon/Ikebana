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

Route::get('/contacto', 'PagesController@contacto');
Route::get('/acerca-de', 'PagesController@info');
Route::get('/bienvenida/{nombre}/{apellido?}','PagesController@bienvenida');
Route::get('/programadores', 'PagesController@equipo')->name('equipo');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
