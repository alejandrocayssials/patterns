<?php
namespace App\chapter3;


class Espresso extends Beverage {
  
	public function __construct() 
	{
		$this->description = "Espresso";
	}
  
	public function cost() :double
	{
		return 1.99;
	}
}

