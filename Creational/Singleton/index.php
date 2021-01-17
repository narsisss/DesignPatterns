<?php

use Creational\Singleton\DatabaseConnection;

/* all of them have one instance #1 */

$db = DatabaseConnection::getInstance();
var_dump($db);

$db2 = DatabaseConnection::getInstance();
var_dump($db2);

$db3 = DatabaseConnection::getInstance();
var_dump($db3);
