<?php
namespace App\chapter2;

class CurrentCondition implements Observer
{
    public $max;
    public $min;
    public $current;

    public function update($temp, $humidity, $pressure)
    {
        $this->max = $temp['max'];
        $this->min = $temp['min'];
        $this->current = $temp['current'];
    }

    public function display()
    {
        return "Actual condition: $this->current";
    }
}