<!--2.11 Use continue to skip printing odd numbers from 1–10.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2.11</title>
</head>
<body>

<?php

echo "Printing only even numbers! <br>";

for($i = 0; $i<=10; $i++){
    if($i%2!=0){
        continue;
    }else{
        echo "$i<br>";
    }
}

?>
    
</body>
</html>