<?php

// create an array that inclusively contains all odd numbers between 0 to 20000. use the var_dump() function at the end to display array values


function generateOddArray(){
    $array_odd = array();

    for($i = 0; $i <= 20000; $i++){
        if($i % 2 != 0){
            $array_odd[] = $i;
        };
    };

    return $array_odd;
};

$array_variable = generateOddArray();

var_dump($array_variable);
?>