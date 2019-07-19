<?php
namespace App\chapter1;

class Quack implements QuackBehavior
{
    public function quack()
    {
        return "I'm can Quack!!";
    }
}
