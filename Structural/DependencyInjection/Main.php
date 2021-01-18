<?php

use Structural\DependencyInjection\Car;
use Structural\DependencyInjection\CarCreation;

class Main
{
    public function testCar()
    {
        $car = new Car('2 door', 'premium engine', '4 wheel');
        $carCreation = new CarCreation($car);
        var_dump($carCreation);
    }
}