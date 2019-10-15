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

Route::get('/about', 'PublicController@about');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/hobbies', 'PublicController@hobbies');

Route::get('/contact', 'PublicController@contact');

Route::get('/index', function () {
    return view('index');
});

Route::get('/masuk', function () {
    return view('login');
});

Route::post('/login',  'LoginController@login');

Route::get('/search/{key}', 'PublicController@search');

Route::get('/product/create', 'ProductController@create');

Route::post('/product/store', 'ProductController@store');

Route::get('/product', 'ProductController@all');