<?php
namespace Creational\Singleton;

class DatabaseConnection
{
    private static $instance;
    protected $connection;

    /* make it private to not allow create new Instance */
    private function __construct()
    {
        $this->connection = 'DB Connected';
    }

    public static function getInstance()
    {

        self::$instance = self::$instance ?? new self();
        return self::$instance;

    }
}

