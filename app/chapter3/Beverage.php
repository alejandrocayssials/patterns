<?php
namespace App\chapter3;

abstract class Beverage 
{
	public $description = "Unknown Beverage";
  
	public function getDescription() :String
	{
		return $this->description;
	}
 
	public abstract function cost() :double;
}
