<?php
namespace Behavioral\Strategy;


class IdComparator implements Comparator
{

    public function compare($id1, $id2) : int
    {
        return $id1 <=> $id2;
    }

}