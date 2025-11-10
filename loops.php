<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>

<?php 

$a = 0;
$b = 0;

$bikes = array("yamaha", "pulsar", "honda");

for($i = 0; $i<10; $i++){
    echo "This is for loop".($i+1)." iteration <br>";
}

echo "<br><br>";

while($a<10){
    echo "This is while loop.($a)<br>";
    $a++;
}

echo "<br><br>";

do{
    echo "This is do-while loop.($b)<br>";
    $b++;
}while($k<10);

echo "<br><br>";

foreach($bikes as $z){
    echo "$z <br>";
}

?>
    
</body>
</html>