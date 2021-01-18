<?php
namespace Structural\Facade;

interface Auth
{

    public function validate();

    public function checkAccess();

    public function login(Storage $storage);

    public function logout();

}