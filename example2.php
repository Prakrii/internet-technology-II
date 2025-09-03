<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document II</title>
</head>
<body>
    <?php
    $quantity = 30; //adding the quantity
    $price = 119.95;//adding the price
    $taxrate = .05;//adding the taxrate

    $total = $quantity * $price ; //finding the total price before tax
    $total = $total + ($total*$taxrate); // add the tax to the total amount

    print "<p>the total price is $total</p>"; // using print to display the total amount

    ?>
</body>
</html>