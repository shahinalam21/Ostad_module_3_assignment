<?php
// Task 3: Array Sorting  


// Create an array called $grades with the following values: 85, 92, 78, 88, 95. Write a PHP function which takes "$grades" as an argument to sort the array in descending order and print the sorted grades as array.

$grades = [85, 92, 78, 88, 95];
function Array_Sorting($grades){
    rsort($grades);
    return $grades;
}
$sort_to_dec = Array_Sorting($grades);
print_r($sort_to_dec);