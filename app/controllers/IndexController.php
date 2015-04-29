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
			Log::info("test q: " . Response::json($data) );
			$data = Resturant::getRestaurantByType($type);
			 
			 Log::info("test : " . Response::json($data) );

			return Response::json($data);
			// return View ::make('home',['data'=>$data]);
		}
		return "error";
		// return View ::make('home',['data'=>$data]);
	}
}