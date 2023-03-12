<?php

$color = [
    // one two three is the key value 
    "one" => "Abuzar",
    "Two" => "Faheem",
    "Three" => "Zouraiz"
];
// Array_key_first function used to print first key value in array 
$First_Key = array_key_first($color);
$key = array_keys($color);
$Existing_key = array_key_exists("Three",$color);
//In this we have two enter the key value and check it is in the array or not 
$Finding_key = key_exists("Two",$color);


echo "<pre>";
print_r($First_Key);
echo "</pre>";

?>