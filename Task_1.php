<?php
// ===========Task Problem==============
// Create a string variable called $text with the value "The quick brown fox jumps over the lazy dog.". Write a PHP function which takes "$text" as an argument to:

// Convert the string to all lowercase.
// Replace "brown" with "red" in the string.
// Print the modified text.

$text = "The quick brown fox jumps over the lazy dog";

function String_Manipulation($text){
    echo "{$text}\n";
    $modify_to_Lowercase = strtolower($text);
    $Modify_to_replace = str_replace("brown","red",$modify_to_Lowercase);
    echo "{$Modify_to_replace}";
}
echo String_Manipulation($text);