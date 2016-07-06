<?php

/* 
 * php randomDrawer.php 
 */

/*
 * Randomly picks an object from an array and prints it.
 */

if (array_key_exists(1, $argv)) {
    
    $positionOfDot = strpos($argv[1], '.');
    $fileType = substr($argv[1], $positionOfDot);
    
    if ($fileType != '.csv') {
        print_r(PHP_EOL . 'The input file is not a CSV. Please retry with a .CSV file.' . PHP_EOL . PHP_EOL);
        die;
    } else {
        $fileToUse = $argv[1];
    }
    
} else {
    $fileToUse = 'names.csv';
}

$fileContents = file_get_contents($fileToUse);
$inputForArray = str_getcsv($fileContents, ',');
foreach ($inputForArray as $individualInput) {
    $array[] = trim($individualInput);
}

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