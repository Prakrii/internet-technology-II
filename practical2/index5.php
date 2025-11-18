<!-- 2.5 Use a switch to display the day of the week based on a number (1–7). -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2.5</title>
</head>
<body>

<?php

$num = 5;

switch($num){
    case 1 : echo "Sunday"; break;
        case 2 : echo "Monday"; break;
            case 3 : echo "Tuesday"; break;
                case 4 : echo "Wednesday"; break;
                    case 5 : echo "Thrusday"; break;
                        case 6 : echo "Friday"; break;
                            case 7 : echo "Saturday"; break;

                            default : echo "Invalid number for day.";
}

?>
    
</body>
</html>