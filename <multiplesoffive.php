<?php

//Create a program that prints all the multiples of 5 starting at 5 and going up to 1,000,000.

function multiplesOfFive(){
    for($i =5; $i<=100000; $i+=5){
        echo "$i <br>";
    };
};

multiplesOfFive();
?>