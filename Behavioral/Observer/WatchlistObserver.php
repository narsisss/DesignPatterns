<?php
namespace Behavioral\Observer;

use SplObserver;
use SplSubject;

class WatchlistObserver implements splObserver
{

    public function update(SplSubject $subject)
    {
        echo "new price is : {$subject->getPrice()}";
    }
}