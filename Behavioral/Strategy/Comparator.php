<?php
namespace Behavioral\Strategy;

interface Comparator
{

    public function compare($first, $second) : int;

}