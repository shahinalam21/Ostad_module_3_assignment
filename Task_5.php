<?php
// Task 5: Password Generator


// Create a PHP function called generatePassword($length) that generates a random password of the specified length. The password should include lowercase letters, uppercase letters, numbers, and special characters (!@#$%^&*()_+). Write a PHP program to generate a password with a length of 12 characters using this function and print the password.

function generatePassword($length){
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+';
    $password = '';

    for($i = 0; $i<$length; $i++){
        $randormIndex = rand(0,strlen($characters)-1);
        $password .=$characters[$randormIndex];
    }
    return $password;
}
$length = 12;
$password = generatePassword($length);
echo "Generated password is = {$password}";





