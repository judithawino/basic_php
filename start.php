<?php

// $min = 1; 
// $max = 50;
// $guess = -3; //Change this value to test!
// $num = rand($min, $max);

// switch (true) {
//     case ($guess==$num):
//         echo "You are correct, the number is $num";
//         break;
//     case ($guess<$num && $guess>=$min):
//         echo "Too low, the number is $num";
//         break;
//     case ($guess>$num && $guess<=$max):
//         echo "Too high, the number is $num";
//         break;
//     default:
//         echo "$guess is out of range";
//         break;
// }
$min = 1; 
$max = 50;
$guess = 34; //Change this value to test!
$num = rand($min, $max);
// $num = 16; // Change this value to test!
switch (true) {
    case ($guess==$num):
        echo "You are correct, the number is $num";
        break;
    case ($guess!=$num):
    if ($guess < $num && $guess>=1){
        echo "Too low, the number is $num";
    }else if ($guess > $num && $guess<=50){
        echo "Too high, the number is $num";
    }
    default:
    if ($guess<$min || $guess>$max){
        echo "$guess is out of range";
    }
    break;
}

// If you really want to go nuts, try this:

