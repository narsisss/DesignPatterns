<?php
namespace Structural\Facade;

use Structural\Facade\AuthSystems\Gmail;
use Structural\Facade\Storage\Redis;

class Main
{

    public function loginGmailUser()
    {
        $auth = new Gmail();
        $storage = new Redis();
        $facade = new Facade($auth, $storage);
        $facade->login();
    }

    public function logoutGmailUser()
    {
        $auth = new Gmail();
        $storage = new Redis();
        $facade = new Facade($auth, $storage);
        $facade->logout();
    }

}