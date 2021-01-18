<?php
namespace Structural\Facade;

interface Storage
{

    public function store(string $token);

    public function clear();

}