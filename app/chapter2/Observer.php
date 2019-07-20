<?php
namespace App\chapter2;

interface Observer 
{
    public function update($temp, $humidity, $pressure);
}