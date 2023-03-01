<?php

for($a=1;$a<=10;$a++){
    echo "<br>";
    if($a==7){
        goto label_3; // Jump To Label which is declared by the name of label
    }
    echo $a;
}
label_1: // ==> Label is declare and its name is Label 
echo "We Know 1";


label_2: // ==> Label is declare and its name is Label 
echo "We Know 2";


label_3: // ==> Label is declare and its name is Label 
echo "We Know 3";


?>