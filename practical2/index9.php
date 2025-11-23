<!-- 2.9 Use foreach to display all elements of an array. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2.9</title>
</head>
<body>

<?php

$BikeBrands = array("honda","BMW","Yamaha","Suzuki");

echo "Bike Brands : "."<br>";

foreach($BikeBrands as $b){
    echo "$b <br>";
}

?>
    
</body>
</html>