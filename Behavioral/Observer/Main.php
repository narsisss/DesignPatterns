<?php
namespace Behavioral\Observer;

class Main
{
    public function afterTrade()
    {
        $symbol = new Symbol();
        $watchlistObserver = new WatchlistObserver();
        $symbol->attach($watchlistObserver);
        $symbol->changePrice(2500);
        $symbol->detach($watchlistObserver);
    }
}