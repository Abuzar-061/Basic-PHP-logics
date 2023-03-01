<?php

$marks = [
    // Usman is saved in $key variable
    "Usman"=>[
        "Physics" =>28,      
        "Maths" =>30,      
        "Computer" =>90,      
    ],
    // Adnan is saved in $key variable
    "Adnan"=>[
        "Physics" =>28,
        "Maths" =>30,
        "Computer" =>90,
    ],
    // Umair is saved in $key variable
    "Umair"=>[
        "Physics" =>28,
        "Maths" =>30,
        "Computer" =>90,
    ],
    // Asim is saved in $key variable
    "Asim"=>[
        "Physics" =>28,
        "Maths" =>30,
        "Computer" =>90,
    ],
];
echo "<table border='2px' cellpadding='5px' cellspacing='0'>";
echo "<tr>
<th>Name</th>
<th>Physics</th>
<th>Maths</th>
<th>Computer</th>
</tr>";
//Here umair usman ... are store in key variable
// And keys value are stored in $v1 Variable
foreach($marks as $key=>$v1){
    echo "<tr>
    <td>$key</td>"; 
//Here $v1 Value is stored in $v2 Variable
    foreach($v1 as $v2){
        echo "<td> $v2 </td>"; 
    }
   echo "</tr>";
}
echo "</table>";
//Loop Ends here
// pre tag is used to format the array
echo "<pre>";
print_r ($marks);
echo "</pre>";
?>