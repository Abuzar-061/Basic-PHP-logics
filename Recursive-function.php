<?php

function factorial($n) {
    // base case: factorial of 0 or 1 is 1
    if ($n == 0 || $n == 1) {
        return 1;
    }
    // recursive case: calculate the factorial using recursion
    else {
        // formula for recursion factorial
        return $n * factorial($n - 1);
    }
}
// print factorial by using echo 

echo "<center>"."<h1>"." Factorial of 3 is : ". factorial(3)."</h1>"."</center>"; // Output: 120



?>