<?php

// Define an array of names
//Array Index starts from 0 1 2 3 4 ...  
$names = array('Alice', 'Bob', 'Charlie', 'David', 'Eve', 'Frank');

// Extract a slice of elements starting from index 2 with a length of 3
$slice = array_slice($names, 2, 4);

// Print the original array and the extracted slice
echo "<h1>"."Original array: "."</h1>";


echo "<pre>";
print_r($names);
echo "</pre>";



echo "<h1>"."Extracted slice: "."</h1>";


echo "<pre>";
print_r($slice);
echo "</pre>";


?>