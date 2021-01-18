<?php
namespace Creational\Builder;

class Main
{
    public function buildTruck()
    {
        $truckBuilder = new TruckBuilder();
        return (new Director())->build($truckBuilder);
    }

    public function buildCar()
    {
        $carBuilder = new CarBuilder();
        return (new Director())->build($carBuilder);
    }
}