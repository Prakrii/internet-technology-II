<!-- 2.7 Write a while loop to keep rolling dice until a 6 appears. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2.7</title>
</head>
<body>

<?php

while(true){
    $roll = rand(1,6);
    echo "Rolled : $roll <br>";

    if($roll == 6){
        break;
    }

}

?>
    
</body>
</html>