<?php
namespace Creational\Builder;

use Creational\Builder\Vehicle\Door;
use Creational\Builder\Vehicle\Engine;
use Creational\Builder\Vehicle\Car;
use Creational\Builder\Vehicle\Wheel;
use Creational\Builder\Vehicle\Vehicle;

class CarBuilder implements Builder
{
    private Car $car;

    public function addDoors()
    {
        $this->car->setPart('rightDoor', new Door());
        $this->car->setPart('leftDoor', new Door());
    }

    public function addEngine()
    {
        $this->car->setPart('carEngine', new Engine());
    }

    public function addWheels()
    {
        $this->car->setPart('wheel1', new Wheel());
        $this->car->setPart('wheel2', new Wheel());
        $this->car->setPart('wheel3', new Wheel());
        $this->car->setPart('wheel4', new Wheel());
    }

    public function createVehicle()
    {
        $this->car = new Car();
    }

    public function getVehicle(): Vehicle
    {
        return $this->car;
    }

}