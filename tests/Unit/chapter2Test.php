<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\chapter2\WeatherData;
use App\chapter2\CurrentCondition;
use App\chapter2\Statistics;
use App\chapter2\Forecast;

class chapter2Test extends TestCase
{

    /**  @test */
    public function its_weather_data_working()
    {
        $weatherdata = new WeatherData();
        $current = new CurrentCondition($weatherdata);
        $statistics = new Statistics($weatherdata);
        $forecast = new Forecast($weatherdata);

        $weatherdata->setMeassurents(80, 34, 12.8);

        $this->assertStringContainsString('Current conditions',$current->display());
        $this->assertStringContainsString('Avg/Max/Min',$statistics->display());
        $this->assertStringContainsString('Forecast',$forecast->display());

        $weatherdata->setMeassurents(40, 70, 12.8);

        $this->assertStringContainsString('Current conditions',$current->display());
        $this->assertStringContainsString('Avg/Max/Min',$statistics->display());
        $this->assertStringContainsString('Forecast',$forecast->display());


    }
}