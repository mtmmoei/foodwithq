<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'IndexController@getReview');
Route::get('/showRestaurant', 'IndexController@showRestaurantByCondition');

Route::get('/home',function(){
	return View::make('home');
});

Route::get('/map',function(){
	return View::make('map');
});

