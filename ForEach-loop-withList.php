<?php

$data = [
 ["Abuzar"],
    ["Usman"],
    ["Umair"]
];
echo "<ul>";
foreach($data as $key=>$v1){
    // echo "<li>". $key ."</li>";
    foreach($v1 as $v2){
        echo "<li>".$v2."</li>";
        }
}
echo "</ul>";


?>