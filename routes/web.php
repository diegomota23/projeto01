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

 
Auth::routes();

Route::get('/Informativo','informative\HomeController@informative')->name('informativo');
Route::get('/suporte', 'HomeController@suporte')->name('suporte');
Route::get('mail', 'HomeController@mail');
Route::get('/home', 'HomeController@informative')->name('home');
Route::get('/', 'HomeController@informative')->name('home');
