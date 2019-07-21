<?php
namespace App\chapter2;

class WeatherData implements Subject
{
	
    public $temp;
    public $humidity;
    public $pressure;

    public $observers = array();
    
    public function setMeassurents($temp, $humidity, $pressure)
    {
        $this->temp = $temp;
        $this->humidity = $humidity;
        $this->pressure = $pressure;

        $this->meassurementsChanged();
    }

    public function meassurementsChanged()
    {
        $this->notifyObservers();
    }

    public function registerObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function notifyObservers()
    {
        foreach($this->observers as $observer){
            $observer->update($this->temp, $this->humidity, $this->pressure);
        }
    }

    public function removeObserver(Observer $o)
    {
        unset($this->observers, $o);
    }

}