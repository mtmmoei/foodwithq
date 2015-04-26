<?php

class Resturant extends Eloquent
{
	protected $table = 'resturant';
	protected $fillable = array('resturantName','map','review',	'image',	'type',	'subtype',	'section');

	public $timestamps = false;
	public static function getAllRestaurants(){
		return DB::table('resturant')->get();
	}

}