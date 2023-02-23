<?php

for($a=1;$a<=10;$a++){
    echo "<br>";
    if($a==7){
        goto label; // Jump To Label which is declared by the name of label
    }
    echo $a;
}
label: // ==> Label is declare and its name is Label 
echo "We Know";

?>