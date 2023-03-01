<?php

$data = [
    "Abuzar"=>[
        "Physics"=>100,
        "Computer"=>100,
    ],
    "Umair"=>[
        "Physics"=>90,
        "Computer"=>90,
    ],
    "Kashan"=>[
        "Physics"=>80,
        "Computer"=>80,
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