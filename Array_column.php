<?php

$array = array(
    array(
        'id' => 2201,
        'First_name' => 'Muhammad',
        'Last_name' => 'Abuzar'
    ),
    array(
        'id' => 2202,
        'First_name' => 'Muhammad',
        'Last_name' => 'Faheem'
    ),
    array(
        'id' => 2203,
        'First_name' => 'Muhammad',
        'Last_name' => 'Zouraiz'
    )
    );

    $newarray = array_column($array,'First_name');

    echo "<pre>";
    print_r($newarray);
    echo "</pre>";


?>