<?php
namespace Behavioral\Strategy;

use DateTime;

class DateComparator implements Comparator
{

    public function compare($date1, $date2) : int
    {
        $newDate1 = new DateTime($date1);
        $newDate2 = new DateTime($date2);

        return $newDate1 <=> $newDate2;
    }

}