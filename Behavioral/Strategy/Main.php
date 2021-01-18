<?php
namespace Behavioral\Strategy;

class Main
{

    public function compareId()
    {
        $ids = [ 25 , 60 ];
        $object = new Strategy(new IdComparator());
        echo $object->executeStrategy($ids);
    }

    public function compareDate()
    {
        $dates = [ '25-03-2020' , '01-02-2021' ];
        $object = new Strategy(new DateComparator());
        echo $object->executeStrategy($dates);
    }

}