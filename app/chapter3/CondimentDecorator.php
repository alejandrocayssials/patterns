<?php
namespace App\chapter3;


abstract class CondimentDecorator extends Beverage 
{
	public $beverage;
	public abstract function getDescription() :String;
}
