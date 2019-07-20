<?php
namespace App\chapter1;

class ModelDuck extends Duck
{
	public function __construct()
	{
        $this->quackBehavior = new Quack();
        $this->flyBehavior = new FlyNoWay();
    }
    
    public function display() 
    {
        return "I'm a model duck!";
    }
}