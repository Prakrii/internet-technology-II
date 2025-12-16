<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document I </title>
</head>
<body>
    <?php
    //using echo to display items
    echo "<h1>Hello World</h1>";
    //trying to display dynamic content (content that changes overtime)
    echo "<h2>Dynamic content ↓ </h2>";
    //dynamic content that shows the current date
    echo "Date: ".date('Y-M-d');
    //using variables
    $Var = "Apple";
    //displaying the variable using print
    print "<p>$Var</p>";

    //using variables to perform addition

    $num1 = 5000;
    $num2 = 6000;
    $sum = $num1 + $num2;

    //using echo to display the numbers and their sum
    echo "<p> the sum of $num1 and $num2 is $sum.</p>"

    ?>
</body>
</html>