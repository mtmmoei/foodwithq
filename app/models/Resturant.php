<?php

class Resturant extends Eloquent
{
	protected $table = 'resturant';
	protected $fillable = array('resturantName','map','review',	'image',	'type',	'subtype',	'section');

	public $timestamps = false;
	public static function getAllRestaurants(){
		return DB::table('resturant')->get();
	}
	public static function getRestaurant($type,$section,$subtype){
		if(!empty($type) && !empty($section) && !empty($subtype)){

			$data = DB::table('resturant')->where('type', '=',$type)->where('section', '=',$section)->where('subtype', '=',$subtype)->get();
			var_dump($data);
			return $data;

		}
		if(!empty($type) && !empty($section)){

			$data = DB::table('resturant')->where('type', '=',$type)->where('section', '=',$section)->get();
			var_dump($data);
			return $data;

		}
		if(!empty($type) && !empty($subtype)){

			$data = DB::table('resturant')->where('type', '=',$type)->where('section', '=',$section)->get();
			var_dump($data);
			return $data;

		}
		if(!empty($section) && !empty($subtype)){

			$data = DB::table('resturant')->where('section', '=',$section)->where('subtype', '=',$subtype)->get();
			var_dump($data);
			return $data;

		}
		if (!empty($subtype)) {
			$data = DB::table('resturant')->where('subtype', '=',$subtype)->get();
			var_dump($data);
			return $data;
		}

		if (!empty($section)) {
			$data = DB::table('resturant')->where('section', '=',$section)->get();
			var_dump($data);
			return $data;
		}
		$data = DB::table('resturant')->where('type', '=',$type)->get();
			var_dump($data);
			return $data;


	}


	

}