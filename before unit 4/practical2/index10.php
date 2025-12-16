<!-- 2.10 Use break to exit a loop early when a certain value is found. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2.10</title>
</head>
<body>

<?php

$numbers = array(1,3,5,7,9,11,13,15,17,19);

foreach($numbers as $x){
    echo "Checking : $x <br>";

    if($x == 13){
        
        echo "13 found!<br>";
        break;
    }

}

echo "Loop terminated!";

?>
    
</body>
</html>