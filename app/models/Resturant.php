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
//Log::info("test db: 1" );
			return DB::table('resturant')->where('type', '=',$type)->where('section', '=',$section)->where('subtype', '=',$subtype)->get();


		}
		if(!empty($type) && !empty($section)){
//Log::info("test db: 2" );
			return  DB::table('resturant')->where('type', '=',$type)->where('section', '=',$section)->get();


		}
		if(!empty($type) && !empty($subtype)){
//Log::info("test db: 3" );
		return DB::table('resturant')->where('type', '=',$type)->where('subtype', '=',$subtype)->get();

		}
		if(!empty($section) && !empty($subtype)){
//Log::info("test db: 4" );
			return  DB::table('resturant')->where('section', '=',$section)->where('subtype', '=',$subtype)->get();


		}
		if (!empty($subtype)) {
//			Log::info("test db: 5" );
		return  DB::table('resturant')->where('subtype', '=',$subtype)->get();

		}

		if (!empty($section)) {
//			Log::info("test db: 6" );
			return  DB::table('resturant')->where('section', '=',$section)->get();

		}
		if (!empty($type)) {
//			Log::info("test db: 7" );
			return DB::table('resturant')->where('type', '=',$type)->get();

		}


		 // $data = DB::table('resturant')->where('type',$type)->get();
		 // 	var_dump($data);
			return "error";
	}


}