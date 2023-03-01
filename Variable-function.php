<?php
// 1st-Function store function in variable at last ------ 
function testing($name){
    echo "Hello $name". "<br>";
}
// Store Function in variable
$variable="testing";
$variable("World");


// 2nd-Function store function in variable at first ------ 
$second_variable = function ($name){
    echo "Hello $name";
};
// Store Function in variable
echo $second_variable("World");

?>