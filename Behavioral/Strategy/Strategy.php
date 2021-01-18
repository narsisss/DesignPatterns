<?php
namespace Behavioral\Strategy;

class Strategy
{
    /**
     * @var Comparator
     */
    private Comparator $comparator;

    public function __construct(Comparator $comparator)
    {
        $this->comparator = $comparator;
    }

    public function executeStrategy(array $elements) : array
    {
        uasort($elements, [$this->comparator, 'compare']);
        return $elements;
    }

}