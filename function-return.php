<?php

function Hello($fname , $lname ){

    $v = "$fname  $lname";
    return $v;

}

$name =  Hello("Muhammad" , "Abuzar");

echo "<center>" . $name . "</center>";
?>