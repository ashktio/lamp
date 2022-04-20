<?php
// create a program that prints the average of the values in the array called "numbers"

$numbers = [1,2,5,10,255,3];



function aveOfArray($someArr) {
    $arrSum = 0;

    foreach($someArr as $arr){
        $arrSum += $arr;
    };

    return $arrSum/count($someArr);
};

echo aveOfArray($numbers);
?>