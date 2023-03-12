<?php

// Define an array
$fruits = array("apple", "banana");

// Add one element to the end of the array
array_push($fruits, "orange");

// Add multiple elements to the end of the array
array_push($fruits, "kiwi", "mango");
echo "<pre>";
print_r ($fruits);
echo "</pre>";
// The resulting array will be: array("apple", "banana", "orange", "kiwi", "mango")

// Remove the last element of the array
$last_fruit = array_pop($fruits);

echo "<pre>";
print_r ($fruits);
echo "</pre>";

// The resulting array will be: array("apple", "banana", "orange", "kiwi")

// The $last_fruit variable will contain the string "Mango"


?>