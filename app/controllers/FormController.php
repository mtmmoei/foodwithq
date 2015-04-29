<?php

class FormController extends BaseController {


	public function saveForm(){
{
		$resturant = new Resturant();

		$resturant->resturantName = Input::get('resturantName');
		$resturant->map = Input::get('map');
		$resturant->review =Input::get('review');
		$resturant->image = Input::get('image');
		$resturant->type = Input::get('type');
		$resturant->subtype = Input::get('subtype');
		$resturant->section = Input::get('section');
		
		$resturant->save();
		var_dump($resturant);
		
	}
		}

}


