<?php

//1-While-Loop
//2-Do/While-Loop
//3-For-Loop
//4-ForEach-Loop


//$a++ Increment
//$a-- Decrement


//---------------------------------------------------------------------------------------------------

//1- While-Loop ------------------------------

echo "<h1>". "While-Loop". "</h1>";

$a=1;

while($a<=10){

    echo $a .")- While Loop Starts..". "<br>";

    $a = $a+1; // Also you can write $a++ For Increment 
}
//---------------------------------------------------------------------------------------------------


echo "<hr>";

//2- Do/While-Loop ------------------------------
echo "<h1>". "Do/While-Loop". "</h1>";

$b = 1;
do{
    echo $b . ")- Do/While Loop"."<br>";
    $b++;
}
while($b<=10);
//---------------------------------------------------------------------------------------------------

//-------Horizontal Line-----
echo "<hr>";

//3- For-Loop ------------------------------
echo "<h1>". "For-Loop". "</h1>";

for($c=1; $c<=10;$c++){
    echo  $c .")- For Loop". "<br>";
}

//------- Horizontal Line-------
echo "<hr>";

//---------------------------------------------------------------------------------------------------

//4- Nested-Loop ------------------------------

// Outer Loop Is used for Rows
// Inner Loop Is used for Column
echo "<h1>". "Nested-Loop". "</h1>";

for ($i = 1; $i <= 100; $i=$i+10) { // Outer Loop
  for ($j = $i; $j < $i+10; $j++) { // Inner Loop
    echo $j ." "; 

  }
  echo "<br>";
}





?>