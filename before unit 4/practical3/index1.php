<!-- 1. Create an associative array `$product` with `'name' => 'Laptop'` and `'price' => 1200`, then display its
price. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3.1</title>
</head>
<body>
    <?php
    $product = [
    'name' => 'Laptop',
    'price' => 1200
    ];

    echo $product['price']; // Outputs: 1200
    ?>
</body>
</html>