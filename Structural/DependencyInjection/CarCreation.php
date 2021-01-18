<?php
namespace Structural\DependencyInjection;

class CarCreation
{
    private Car $car;

    public function __construct(Car $car)
    {
        $this->car = $car;
    }

    public function getCar(): array
    {
        return [
            'door' => $this->car->getDoor(),
            'engine' => $this->car->getEngine(),
            'wheel' => $this->car->getWheel(),
        ];
    }
}