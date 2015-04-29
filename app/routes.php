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

Route::get('/about',function(){
	return View::make('about');
});

Route::get('/map',function(){
	return View::make('map');
});

Route::get('Restaurant','RestaurantsController@getRestaurant');

Route::get('Restaurant/{type}/{section}/{subtype}', array('as' => 'name', 'uses' => 'EachstatusController@showEachStatus'));
Route::get('addData', function() 
{
    return View::make('form');
});

Route::post('addData','FormController@saveForm');

