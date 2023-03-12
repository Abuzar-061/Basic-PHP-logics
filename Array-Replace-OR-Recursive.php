<?php

$Fruits = ["Apple","Banana","Orange","Water-Melon","Melon"];
$vegetables = ["Cauli-Flower","Bringle","Cucumber"];

$NewArray = array_replace($Fruits,$vegetables);

echo "<pre>";
print_r ($NewArray);
echo "</pre>";

echo "<br>";

// Define the original array
$array1 = array(
  "fruit" => array(
    "apple" => "red",
    "banana" => "yellow"
  ),
  "vegetable" => array(
    "lettuce" => "green",
    "carrot" => "orange"
  )
);

// Define the replacement array
$array2 = array(
  "fruit" => array(
    "apple" => "green",
    "kiwi" => "brown"
  ),
  "vegetable" => array(
    "lettuce" => "red",
    "tomato" => "red"
  )
);

// Use the array_replace_recursive() function to replace values in the original array with the values of the replacement array
$new_array = array_replace_recursive($array1, $array2);

// Print the resulting array to the screen
print_r($new_array);


?>