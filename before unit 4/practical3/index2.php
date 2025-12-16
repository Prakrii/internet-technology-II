 <!-- Use `foreach` to print all values of the `$product` array -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3.2</title>
</head>
<body>
    <?php
    $product = [
    'name' => 'Laptop',
    'price' => 1200,
    'quality' => 'A',
    'color'=>'red'
    ];
    foreach($product as $x){
        echo $x ."<br>";
    }

    ?>
</body>
</html>