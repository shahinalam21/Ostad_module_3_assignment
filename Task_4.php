<?php
// Task 4: Multidimensional Array


// Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student.


$studentGrades = [
    "shahin" => [
        "Math" =>60,
        "English"=>40,
        "Science"=>50
    ],
    "rakib" => [
        "Math" =>70,
        "English"=>30,
        "Science"=>90
    ],
    "jamal" => [
        "Math" =>90,
        "English"=>60,
        "Science"=>90
    ]
];

function Multidimensional_Array($grades){
    foreach($grades as $student){
    $total = 0;
    $subjectcount = 0;
    foreach($student as $key => $grade){
        echo "{$key} marks = {$grade}\n";
        $total +=$grade;
        $subjectcount++;
    }
    $avarage = $total/$subjectcount;
    echo "Avarage gread is = ".number_format($avarage,2)."\n\n";
}    
}
Multidimensional_Array($studentGrades);