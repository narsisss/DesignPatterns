<?php
namespace Structural\Facade\AuthSystems;

use Structural\Facade\Auth;
use Structural\Facade\Storage;

class Internal implements Auth
{

    public function validate()
    {
        // check user pass in db
        return true;
    }

    public function checkAccess()
    {
        // check access to app
        return true;
    }

    public function login(Storage $storage)
    {
        // login process and create token and store in Storage
        $token = md5(uniqid());
        $storage->store($token);
        return 'logedIn';
    }

    public function logout()
    {
        //logout process
        return 'logedout';
    }
}