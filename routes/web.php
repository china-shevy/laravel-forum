<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'PostsController@index');
Route::resource('discussions', 'PostsController');

Route::get('/user', 'UsersController@index');
Route::get('/user/register', 'UsersController@register');
Route::post('/user/register', 'UsersController@store');