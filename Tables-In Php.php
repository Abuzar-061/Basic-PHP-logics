<?php

$marks= [
    "Abuzar"=>[
        "physics"=>90,
        "Math"=>78,
        "Computer"=>100,
    ],
    "Usman"=>[
        "physics"=>90,
        "Math"=>78,
        "Computer"=>100,
    ],
    "Ali"=>[
        "physics"=>90,
        "Math"=>78,
        "Computer"=>100,
    ],
    "Abdullah"=>[
        "physics"=>90,
        "Math"=>78,
        "Computer"=>100,
    ],
];


// Show In table 
echo "<table border='2px' cellspacing='0' cellpadding='5px'>";
echo "<tr>
<td>Name</td>
<td>Physics</td>
<td>Maths</td>
<td>Computer</td>
 </tr>";
 //Here names are stored in key variables 
 // And keys value are stored in $v1 Variable
 foreach($marks as $key=>$v1){
    echo "<tr>
    <td>$key</td>";
//Here $v1 Value is stored in $v2 Variable
    foreach ($v1 as $v2) {
        echo"<td>$v2</td>";
    }
    echo "</tr>";
 }
echo "</table>";
//Loop End here
?>