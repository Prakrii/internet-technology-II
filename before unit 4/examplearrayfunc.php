<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArrayFunctions</title>
</head>
<body>
<? php


echo "<h3>Counting Elements : </h3>";
$items = ['apple','banana','cherry'];
echo "Number of items : ".count($items)."<br>";

echo "<h3>Sorting Indexed Arrays : </h3>";
$numbers = [11,11,13,92-94];
sort($numbers);
echo "Sorted names (ascending) : ".implode(", ",$numbers)."<br>";

$names = ['Moe','Larry','Curly'];
rsort($names);
echo "Sorted names (descending) : ".implode(", ",$names)."<br";




?>    
</body>
</html>