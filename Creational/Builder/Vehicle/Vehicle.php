<?php
namespace Creational\Builder\Vehicle;

abstract class Vehicle
{

    private array $data = [];

    public function setPart(string $key, object $value)
    {
        $this->data[$key] = $value;
    }

}