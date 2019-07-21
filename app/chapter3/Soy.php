<?php
namespace App\chapter3;

class Soy extends CondimentDecorator 
{
	public function __construct(Beverage $beverage) 
	{
		$this->beverage = $beverage;
	}

	public function getDescription() :String
	{
		return $this->beverage->getDescription() . ", Soy";
	}

	public function cost() :double 
	{
		return 0.15 + $this->beverage->cost();
	}
}
