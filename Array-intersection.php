<?php

$common1 = array("Abuzar","Faheem","Zouraiz");
$common2 = array("Faheem","Ahmad","Usman");

$commonn = array_intersect($common1,$common2);

print_r($commonn);

?>