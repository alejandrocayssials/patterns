<?php
namespace App\chapter1;


abstract class Duck
{

    public function performQuack()
    {
        return $this->quackBehavior->quack();
    }

    public function performFly()
    {
        return $this->flyBehavior->fly();
    }

    public function swim()
    {
        return "All ducks float, even decoys!";
    }
    
    public function setFlyBehavior(FlyBehavior $fb) 
    {
        $this->flyBehavior = $fb;
    }

    public function setQuackBehavior(QuackBehavior $qb) 
    {
        $this->quackBehavior = $qb;
    }
}