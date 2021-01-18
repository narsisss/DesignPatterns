<?php
namespace Structural\Facade\Storage;

use Structural\Facade\Storage;

class Redis implements Storage
{

    public function store(string $token)
    {
        // store to Redis
        return true;
    }

    public function clear()
    {
        // clear Redis  ;
        return true;
    }

}