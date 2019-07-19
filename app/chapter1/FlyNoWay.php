<?php
namespace App\chapter1;

class FlyNoWay implements FlyBehavior 
{
    public function fly()
    {
        return "I can't fly";
    }
}