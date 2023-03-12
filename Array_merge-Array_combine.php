<?php
echo "<h1>"."Array Merge"."</h1>";
// Define two arrays
$fruits1 = array("Apple", "Apple");
$fruits2 = array("Banana", "Banana");

// Merge the two arrays into a single array
$all_fruits = array_merge($fruits1, $fruits2);

echo "<pre>";
print_r($all_fruits);
echo "</pre>";

// The resulting array will be: array("Apple", "Apple", "Banana", "Banana")


echo "<h1>"."Array Combine"."</h1>";
// Define two arrays
$keys = array("a", "b", "c");
$values = array(1, 2, 3);

// Combine the two arrays into a single associative array
$combined_array = array_combine($keys, $values);


echo "<pre>";
print_r($combined_array);
echo "</pre>";

// The resulting array will be: array("a" => 1, "b" => 2, "c" => 3)



?>