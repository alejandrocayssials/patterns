<?php
namespace App\chapter3;

class Mocha extends CondimentDecorator 
{
	public function __construct(Beverage $beverage) 
	{
		$this->beverage = $beverage;
	}
 
	public function getDescription() :String 
	{
		return $this->beverage->getDescription() . ", Mocha";
	}
 
	public function cost() :double 
	{
		return 0.20 + $this->beverage->cost();
	}
}
