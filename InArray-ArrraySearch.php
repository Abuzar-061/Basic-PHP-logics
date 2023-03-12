<?php

$a = ["Apple","Banana","Orange","Water-Melon","Melon", 44];
$arraysize = count($a);
echo "The size of array is : ".$arraysize ;
echo "<br>";


// Array_search function is used to find the index where the word is 
echo "The Melon is on ". "<b>". array_search('Melon',$a)."</b>"." index of the array"; // result 4 bcz array index starts form 0 1 2 3 4 ...

echo "<br>";
// in_array function is used to find the word in array if the word is inside the array then it will show true else it shows false
echo in_array('Apple',$a);

echo "<br>";


//Using If-Else Condition ;
// If The Melon is inside the array the code prints Find Successfully Otherwise it prints Can't Find
if(in_array("Melon",$a)){
    echo "Find Successfully";
}else{
    echo "Can't Find";
}
echo "<br>";
// If you find numerical value in function you have to add true mode which is called strict mode in the in_array function
if(in_array(44,$a, true)){
    echo "Find Successfully";
}else{
    echo "Can't Find";
}


?>