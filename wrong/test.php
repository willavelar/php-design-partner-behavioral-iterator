<?php

use DesignPattern\Wrong\Budget;

require "vendor/autoload.php";

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