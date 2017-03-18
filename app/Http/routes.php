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

Route::resource('/movie', 'MovieController');

Route::get('/movie/destroy/{id}', ['as' => 'movie/destroy', 'uses' => 'MovieController@destroy']);
Route::post('/movie/search', ['as' => 'movie/search', 'uses' => 'MovieController@search']);


Route::resource('/category', 'CategoryController');
Route::post('/category/search', ['as' => 'category/search', 'uses' => 'CategoryController@search']);
Route::get('/category/destroy/{id}', ['as' => 'category/destroy', 'uses' => 'CategoryController@destroy']);

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
