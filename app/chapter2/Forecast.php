<?php
namespace App\chapter2;

class Forecast implements Observer, DisplayElement
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
        $this->setMessage();
    }

    public function setMessage()
    {
        if($this->temp >= 60){
            $this->message = "Hace calor!. ";
        }else {
            $this->message = "Hace frio. ";
        }

        if($this->humidity >= 60){
            $this->message .= "Quizas llueva";
        }
    }

    public function display()
    {
        return "Forecast: $this->message";
    }
}
