<?php

// Define an array of numbers
$numbers = array(1, 2, 3, 4, 5);

// Remove two elements starting from index 1  
// elements to insert in their place
array_splice($numbers, 1,2);

// Print the modified array
echo "Modified array: ";
echo "<pre>";
print_r($numbers);
echo "</pre>";
//Output : 1 4 5

?> 