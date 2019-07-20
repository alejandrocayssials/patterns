<?php
namespace App\chapter2;

class WeatherData implements Subject
{
	
    public $temp;
    public $humidity;
    public $pressure;

    public $observers;

    public function __construct()
	{
        $this->observers = array();
    }
    
    public function setMeassurents()
    {
        $this->temp = $this->getTemperature();
        $this->humidity = $this->getHumidity();
        $this->pressure = $this->getPressure();

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

    public function getTemperature()
    {
        $data[] = [ 
            'max' => 48,
            'min' => 25,
            'current' => 34,
            'day' => 25-05-2019,
         ];
        
        return $data;
    }

    public function getHumidity()
    {
        $data[] = [ 
            'humidity' => 25,
         ];
        
        return $data;
    }

    public function getPressure()
    {
        $data[] = [ 
            'pressure' => 25,
         ];
        
        return $data;
    }
}