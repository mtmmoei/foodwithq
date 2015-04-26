<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResturant extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		 Schema::create('resturant', function ($table) {
		 	$table->increments('id');
		 	$table->string('resturantName');
		 	$table->string('map');
		 	$table->string('review');
		 	$table->string('image');
		 	$table->string('type');
		 	$table->string('subtype');
		 	$table->string('section');
		 	});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('resturant');
	}

}
