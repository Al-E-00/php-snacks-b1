<?php

$numberArray = [];
$counter = 0;
$i = 0;

for ($i; $i < 15; $i++) {
    $casualNum = rand(0, 15);
    if (in_array($casualNum, $numberArray) == false) {
        array_push($numberArray, $casualNum);
    } else {
        $i--;
    }
    $counter++;
}
var_dump($counter);

var_dump($numberArray);
