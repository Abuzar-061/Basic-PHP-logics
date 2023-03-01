<?php

 $name = "Abuzar";
if($name == "Abuzar"){
echo "Abuzar";
}
else{
    echo " Wrong";
}
//--------- Line Break -------------
echo "<br>";

//--------- Else-if In PHP ---------


//--------- Marks-Project-----------

$marks = 40;
if($marks == 20){
    echo "Congrajulations You passed your exam with E-Grade";
}
elseif($marks>=20 && $marks <= 40){
    echo "Congrajulations You passed your exam with D-Grade";
}
elseif($marks>=40 && $marks <= 60){
    echo "Congrajulations You passed your exam with C-Grade";
}
elseif($marks>=60 && $marks<=80){
    echo "Congrajulations You passed your exam with B-Grade";
}
elseif($marks>=80 && $marks <= 100){
    echo "Congrajulations You passed your exam with A-Grade";
}
else{
    echo "Fail";
}

?>
