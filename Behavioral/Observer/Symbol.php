<?php
namespace Behavioral\Observer;

use SplObjectStorage;
use SplObserver;
use SplSubject;

class Symbol implements splSubject
{

    private SplObjectStorage $observers;
    private int $price;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();
        $this->price = 0;
    }

    public function attach(SplObserver $observer)
    {
        echo "Subject: Attached an observer.\n";
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
        echo "Subject: Detached an observer.\n";
    }

    public function notify()
    {
        echo "Subject: Notifying observers...\n";
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function changePrice(int $price)
    {
        $this->price = $price;
        $this->notify();
    }

    public function getPrice()
    {
        return $this->price;
    }
    
}