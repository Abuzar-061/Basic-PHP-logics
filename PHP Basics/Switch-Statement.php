<?php

// $day = "Friday" || "Sunday";
$day = "Monday";
switch ($day) {
    case "Sunday":
        echo "Enjoy Weekend";
        break;
    case 'Monday':
        echo "Today is Monday Go to work";
        break;
    case 'Tuesday':
        echo "Today is Tuesday Go to work";
        break;
    case 'Wednesday':
        echo "Today is Wednesday Go to work";
        break;
    case 'Thursday':
        echo "Today is Thursday Go to work";
        break;
    case 'Friday':
        echo "Enjoy Weekend";
        break;
    case 'Saturday':
        echo "Today Is saturday Go to work";
        break;
    
    default:
        echo "Enter a valid Week Day";
        break;
}

?>