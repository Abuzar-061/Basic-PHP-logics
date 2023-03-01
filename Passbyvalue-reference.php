<?php



//Pass By Value

function Value($a){
$a="Only Str Value Print in pass by value";
}
$str= "<center>"."<h1>"."Pass By Value"."</h1>"."</center>";
Value($str);
echo $str;



//Pass By reference

function reference(&$b){
$b="<center>"."<h1>"."Pass By Reference" ."</h1>"."</center>";
}
$str2= "<center>"."<h1>"."Pass By reference"."</h1>"."</center>";
reference($str2);
echo $str2;

?>