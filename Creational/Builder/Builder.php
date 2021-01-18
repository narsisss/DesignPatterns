<?php
namespace Creational\Builder;

use Creational\Builder\Vehicle\Vehicle;

interface Builder
{

    public function createVehicle();
    public function addDoors();
    public function addEngine();
    public function addWheels();
    public function getVehicle() : Vehicle;

}