<?php

// Define an array
$fruits = array("apple", "banana", "orange");

// Remove the first element of the array
$first_fruit = array_shift($fruits);

echo "<pre>";
print_r($fruits);
echo "</pre>";
// The resulting array will be: array("banana", "orange")

// The $first_fruit variable will contain the string "apple"


echo "<br>";

// Add one element to the beginning of the array
array_unshift($fruits, "Apple");

// Add multiple elements to the beginning of the array
array_unshift($fruits, "kiwi", "mango");

// The resulting array will be: array("kiwi", "mango", "Apple", "banana", "orange")

echo "<pre>";
print_r($fruits);
echo "</pre>";


?>