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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'PagesController@first');

Route::get('/first', 'PagesController@first');

Route::get('/about', 'PagesController@about');

Route::get('/contacts', 'PagesController@contacts');

Route::get('/contactus', 'PagesController@contactus');

Route::get('/gallery', 'PagesController@gallery');

Route::get('/games', 'PagesController@games');

Route::get('/prices', 'PagesController@prices');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
