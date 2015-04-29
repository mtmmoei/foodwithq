<?php

class IndexController extends Controller {
	public  function getReview(){
		$data = Resturant::getAllRestaurants();
		return View ::make('index',['data'=>$data]);

	}

	public  function showRestaurantByCondition(){
		if (Request::ajax())
		{
			
			$section = Input::get('section');
			$type = Input::get('type');
			$subtype = Input::get('subtype');

			$data = Resturant::getRestaurant($type,$section,$subtype);
			var_dump($data);
			// Log::info("test ajax: " . $type );
			Log::info("test data: " . sizeof($data) );
			return Response::json($data);
			// return View ::make('home',['data'=>$data]);
		}
		return "error";
		// return View ::make('home',['data'=>$data]);
	}
}