<?php
// Task 2: Array Manipulation


// Create an array called $numbers containing the numbers 1 to 10. Write a PHP function which takes the "$numbers" array as an argument to remove the even numbers from the array and print the resulting array.

function Array_Manipulation($numbers){
    foreach($numbers as $Oddnumber){
        if($Oddnumber % 2 !=0){
            echo "{$Oddnumber}\n";
        }
    }
}
$numbers = range(1,10);
Array_Manipulation($numbers);