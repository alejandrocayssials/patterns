<?php
 
class Whip extends CondimentDecorator {
	public function __construct(Beverage $beverage) 
	{
		$this->beverage = $beverage;
	}

	public function getDescription() :String
	{
		return $this->beverage->getDescription() . ", Whip";
	}

	public function cost() :double 
	{
		return 0.25 + $this->beverage->cost();
	}
}
