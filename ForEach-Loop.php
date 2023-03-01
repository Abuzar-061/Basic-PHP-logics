<?php

$name = array (
    "Usman" => 30,
    "Abu Baker" => 23,
    "Adnan" => 24
);
foreach($name as $key => $value){
    echo "<ul>";
    echo "<pre>";
    echo "<li>" .$key." = ".$value . "<br>" ."</li>";
    echo "</pre>";
    echo "</ul>";
}

?>