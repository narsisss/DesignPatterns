<?php
namespace Structural\Facade\Storage;

use Structural\Facade\Storage;

class Memcached implements Storage
{

    public function store(string $token)
    {
        // store to memcached
        return true;
    }

    public function clear()
    {
        // clear memcached  ;
        return true;
    }

}