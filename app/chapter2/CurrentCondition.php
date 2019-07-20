<?php
namespace App\chapter2;

class CurrentCondition implements Observer, DisplayElement
{
	
    public $weatherData;
    
    public function __construct(Subject $subject)
	{
        $this->weatherData = $subject;
        $subject->registerObserver($this); 
    }
    
    public function update($temp, $humidity, $pressure)
    {
        $this->temp = $temp;
        $this->humidity = $humidity;
    }

    public function display()
    {
        return "Current conditions: $this->temp F and $this->humidity %";
    }
}