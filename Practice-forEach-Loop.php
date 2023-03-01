<?php

$data = [
    "Abuzar"=>[
        "Physics"=> 35,
        "Computer"=> 45,
    ],
    "Usman"=>[
        "Physics"=> 45,
        "Computer"=> 49,
    ],
    "Ali"=>[
        "Physics"=> 49,
        "Computer"=> 49,
    ]
    ];
    echo "<table border='2px'>";
    echo "<tr>
    <td>Name</td>
    <td>Physics</td>
    <td>Computer</td>
    </tr>";
    foreach($data as $key=>$v1){
        echo "<tr>
              <td>$key</td>";
        foreach($v1 as $v2){
        echo "<td>$v2</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

?>