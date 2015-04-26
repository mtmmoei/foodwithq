<?php

class IndexController extends Controller {
	public  function getReview(){
		$data = Resturant::getAllRestaurants();
		return View ::make('index',['data'=>$data]);
	}
}