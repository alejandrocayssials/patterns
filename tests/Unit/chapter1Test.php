<?php

namespace Tests\Unit;

use App\chapter1\MallardDuck;
use Tests\TestCase;

class chapter1Test extends TestCase
{
    /**  @test */
    public function its_mallard_duck()
    {
            
        $duck = new MallardDuck();
        $this->assertEquals("I'm a real Mallard Duck!!",$duck->display());
        $this->assertEquals("I'm can Quack!!",$duck->performQuack());
        $this->assertEquals("I'm can Fly!!",$duck->performFly());
        $this->assertEquals("All ducks float, even decoys!",$duck->swim());
            
    }
}