<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\chapter1\ModelDuck;
use App\chapter1\MallardDuck;
use App\chapter1\FlyRockPowered;

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

    /**  @test */
    public function its_model_duck()
    {
            
        $duck = new ModelDuck();
        $this->assertEquals("I'm a model duck!",$duck->display());
        $this->assertEquals("I'm can Quack!!",$duck->performQuack());
        $this->assertEquals("I can't fly",$duck->performFly());
        $this->assertEquals("All ducks float, even decoys!",$duck->swim());
        
        $duck->setFlyBehavior(new FlyRockPowered());

        $this->assertEquals("I'm flying with a rocket!",$duck->performFly());
    }
}