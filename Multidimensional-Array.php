<?php

$array = [

    [1,"Usman","Tester",5000],
    [2,"Adnan","Accountant",5000],
    [3,"Abu-Baker","Developer",5000],
    [4,"Umair","Manager",5000],

];
  

echo $array[0][2];


//print array 
echo "<pre>";
print_r($array) ;
echo "</pre>";

echo "<hr>";

//-------------------------Using Nested Loop--------------------
$nested=[
    [1,"Usman","Tester",5000],
    [2,"Adnan","Accountant",5000],
    [3,"Abu-Baker","Developer",5000],
    [4,"Umair","Manager",5000],

];
// Used Nested Loop outer for rows and inner for columns
for($row=0;$row<4;$row++){
    for($col=0;$col<4;$col++){
        echo $nested[$row][$col]. " ";
    }
    echo "<br>";
}


echo "<hr>";
//-------------------Using For Each Loop----------------------------

$table=[
    [1,"Usman","Tester",5000],
    [2,"Adnan","Accountant",5000],
    [3,"Abu-Baker","Developer",5000],
    [4,"Umair","Manager",5000],

];
// For Table Design
echo "<table border='2px' border-collapse='collapse'>";
//For Table Heading 
echo "<tr>
<th>Employe-Id</th>
<th>Employe-Name</th>
<th>Designation</th>
<th>Salary</th>
</tr>";


echo "<tr>";
foreach($table as $value1 ){
    foreach($value1 as $value2){
        echo  "<td>" .$value2."</td>";
    }
    echo "</tr>";

}
echo "</table>";


?>