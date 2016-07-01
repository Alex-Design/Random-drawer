<?php

/* 
 * php randomDrawer.php 
 */

/*
 * Randomly picks an object from an array and prints it.
 */

$array = ['Amy', 'John', 'George'];
$arrayLength = count($array) - 1; // arrays begin at index 0

if ($arrayLength < 0) {
    print_r(PHP_EOL . 'The array has no values. Please place values inside before re-running the command.' . PHP_EOL . PHP_EOL);
    die;
} elseif ($arrayLength == 0) {
    print_r(PHP_EOL . 'The array only has one value. Please input further values before re-running the command.' . PHP_EOL . PHP_EOL);
    die;
}

$randomNumber = mt_rand(0, $arrayLength);
print_r(PHP_EOL . $array[$randomNumber] . PHP_EOL . PHP_EOL);