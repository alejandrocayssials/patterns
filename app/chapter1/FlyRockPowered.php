<?php
namespace App\chapter1;

class FlyRockPowered implements FlyBehavior 
{
    public function fly()
    {
        return "I'm flying with a rocket!";
    }    
}