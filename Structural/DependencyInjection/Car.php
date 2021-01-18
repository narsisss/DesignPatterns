<?php
namespace Structural\DependencyInjection;

class Car {

    private string $door;
    private string $engine;
    private string $wheel;

    public function __construct($door, $engine, $wheel)
    {
        $this->door = $door;
        $this->engine = $engine;
        $this->wheel = $wheel;
    }

    public function getDoor(): string
    {
        return $this->door;
    }

    public function getEngine(): string
    {
        return $this->engine;
    }

    public function getWheel(): string
    {
        return $this->wheel;
    }
}
