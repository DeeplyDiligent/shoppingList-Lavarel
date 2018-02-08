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


Route::get('/messages', 'MessagesController@getMessages');
Route::get('/', 'pagesController@getHome');
Route::get('/about', 'pagesController@getAbout');

Route::post('/about/submit', 'MessagesController@submit');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
