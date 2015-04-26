<?php

class Resturant extends Eloquent
{
	protected $table = 'resturant';
	protected $fillable = array('resturantName','map','review',	'image',	'type',	'subtype',	'section');

	public $timestamps = false;

}