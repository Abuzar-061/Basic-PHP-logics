<?php

$a=10; // Global Variable // This variable is global bcz it apply anywhere in php 

function explain(){
    $a=2; // Local Variable // This variable is local bcz it is apply only in this curle braces not outside 
    echo $a; // print Local variable // Prints 2
}
explain(); 

echo "<br>";

echo $a; // Prints Global Variable  // Prints 10 

?>