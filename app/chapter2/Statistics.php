<?php
namespace App\chapter2;

class Statistics implements Observer, DisplayElement
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
    }

    public function display()
    {
        return "Avg/Max/Min temperature: $this->temp/$this->temp/$this->temp";
    }
}
