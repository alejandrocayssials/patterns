<?php

namespace App\chapter1;

use App\chapter1\Duck;


class MallardDuck extends Duck
{
    public function __construct()
    {
        $this->quackBehavior = new Quack();
        $this->flyBehavior = new FlyWithWings();
    }

    public function display()
    {
        return "I'm a real Mallard Duck!!";
    }
}