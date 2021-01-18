<?php
namespace Structural\Facade;

class Facade
{
    /**
     * @var Auth
     */
    private Auth $auth;
    /**
     * @var Storage
     */
    private Storage $storage;

    public function __construct(Auth $auth, Storage $storage)
    {

        $this->auth = $auth;
        $this->storage = $storage;
    }

    public function login()
    {
        $this->auth->validate();
        $this->auth->checkAccess();
        $this->auth->login($this->storage);
    }

    public function logout()
    {
        $this->auth->logout();
    }

}