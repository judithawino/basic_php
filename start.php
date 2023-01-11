<?php

$min = 1; 
$max = 50;
$guess = -3; //Change this value to test!
$num = rand($min, $max);

switch (true) {
    case ($guess==$num):
        echo "You are correct, the number is $num";
        break;
    case ($guess<$num && $guess>=$min):
        echo "Too low, the number is $num";
        break;
    case ($guess>$num && $guess<=$max):
        echo "Too high, the number is $num";
        break;
    default:
        echo "$guess is out of range";
        break;
}


