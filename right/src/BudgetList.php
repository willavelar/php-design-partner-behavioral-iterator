<?php

namespace DesignPattern\Right;

class BudgetList implements \IteratorAggregate
{
    public array $budget = [];

    public function addBudget(Budget $budget): void
    {
        $this->budget[] = $budget;
    }

    public function getIterator(): \ArrayIterator
    {
        return new \ArrayIterator($this->budget);
    }
}