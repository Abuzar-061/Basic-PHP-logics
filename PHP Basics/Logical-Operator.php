<?php
// Logical (OR "||") Operator "In OR Operator One Condition Should be true"
$name ="James";
if($name=="Johns" || $name=="James"){
    echo "You already have an account";
}
else{
    echo "You don't have an account";
}


//----- For Line Break ------- 
echo "<br>";




// Logical (AND "&&") Operator "In AND operation both Condition Should be true"  

$age=20;
if($age>=18 && $age<=21){
    echo "Yes, you are 18+";
}
else{
    echo "You are Under 18";
}

?>