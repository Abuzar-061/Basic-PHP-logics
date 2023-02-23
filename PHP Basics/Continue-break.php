<?php

for($a=1;$a<=10;$a++){ 
    echo "<br>";
    //-----------Continue----------- //_______ Continue the Loop and Skip 7 ________
    if($a == 7){
        continue;
    }
    elseif($a == 9){
    //-----------Break----------- // _______ stops at 8 ________
        break;
    }
    echo $a;
}


?>