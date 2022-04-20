<?php

//Create a program that prints the sum of all the values in the array "numbers"

$numbers = array(1,2,5,10,255,3);

function sumArray($someArr){
    $arrSum = 0;

    foreach($someArr as $arr){
        $arrSum += $arr;
    };

    return $arrSum;
};

echo sumArray($numbers);
?>