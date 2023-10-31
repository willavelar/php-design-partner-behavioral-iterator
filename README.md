## Iterator

Iterator is a behavioral design pattern that lets you traverse elements of a collection without exposing its underlying representation (list, stack, tree, etc.).

-----

We need to create a list of budgets and then show information about them.

### The problem

This way, by grouping via array, we can place other types of information that will not be part of the budget, thus creating gaps in our code.

```php
<?php
class Budget
{
    public float $value;
    public int $items;
}
```
```php
<?php

$budget1 = new Budget();
$budget1->items = 7;
$budget1->value = 1500.75;

$budget2 = new Budget();
$budget2->items = 3;
$budget2->value = 150;

$budget3 = new Budget();
$budget3->items = 5;
$budget3->value = 1350;

$budgetList = [
    $budget1,
    $budget2,
    $budget3
];

foreach ($budgetList as $budget) {
    echo "Value: ". $budget->value . PHP_EOL;
    echo "Items: ". $budget->items . PHP_EOL;

    echo PHP_EOL;
}
```


### The solution

Now, using the Itarator pattern, we create an object that is a list of budgets, which only accepts budgets, and then we make it traversable by the PHP Iterator.

```php
<?php
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
```
```php
<?php
$budget1 = new Budget();
$budget1->items = 7;
$budget1->value = 1500.75;

$budget2 = new Budget();
$budget2->items = 3;
$budget2->value = 150;

$budget3 = new Budget();
$budget3->items = 5;
$budget3->value = 1350;

$budgetList = new BudgetList();
$budgetList->addBudget($budget1);
$budgetList->addBudget($budget2);
$budgetList->addBudget($budget3);

foreach ($budgetList as $budget) {
    echo "Value: ". $budget->value . PHP_EOL;
    echo "Items: ". $budget->items . PHP_EOL;

    echo PHP_EOL;
}
```

-----

### Installation for test

![PHP Version Support](https://img.shields.io/badge/php-7.4%2B-brightgreen.svg?style=flat-square) ![Composer Version Support](https://img.shields.io/badge/composer-2.2.9%2B-brightgreen.svg?style=flat-square)

```bash
composer install
```

```bash
php wrong/test.php
php right/test.php
```