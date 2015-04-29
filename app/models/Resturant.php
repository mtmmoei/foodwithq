<?php

class Resturant extends Eloquent
{
	protected $table = 'resturant';
	protected $fillable = array('resturantName','map','review',	'image',	'type',	'subtype',	'section');

	public $timestamps = false;
	public static function getAllRestaurants(){
		return DB::table('resturant')->get();
	}
	public static function getRestaurantByType($type){
		return DB::table('resturant')->where('type', '=', $type)->get();
	}
public static function getRestaurant($type,$section,$subtype){
		if(!empty($type) && !empty($section) && !empty($subtype)){

			return DB::table('resturant')->where('type', '=',$type)->where('section', '=',$section)->where('subtype', '=',$subtype)->get();


		}
		if(!empty($type) && !empty($section)){

			return  DB::table('resturant')->where('type', '=',$type)->where('section', '=',$section)->get();


		}
		if(!empty($type) && !empty($subtype)){

		return DB::table('resturant')->where('type', '=',$type)->where('section', '=',$section)->get();

		}
		if(!empty($section) && !empty($subtype)){

			return  DB::table('resturant')->where('section', '=',$section)->where('subtype', '=',$subtype)->get();


		}
		if (!empty($subtype)) {
		return  DB::table('resturant')->where('subtype', '=',$subtype)->get();

		}

		if (!empty($section)) {
			return  DB::table('resturant')->where('section', '=',$section)->get();

		}
		if (!empty($type)) {
			return DB::table('resturant')->where('type', '=',$type)->get();

		}


		 // $data = DB::table('resturant')->where('type',$type)->get();
		 // 	var_dump($data);
			return "error";
	}


}