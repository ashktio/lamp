<?php
// create a program that counts from 1 to 2000. As it loops through each number, have your
// program generate the number and a message saying weather it's odd or even.


function oddOrEven(){
    for($i=1; $i<=2000;$i++){
        if($i % 2 == 0){
            echo "Number is $i. Tbis is an even number. <br>";
        }else{
            echo "Number is $i. This is an odd number. <br>";
        };
    };
};

echo oddOrEven();

?>