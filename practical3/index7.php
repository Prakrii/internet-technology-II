<!-- 7. Generate a random integer between 1 and 20 and round 5.678 to two decimal place -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3.7</title>
</head>
<body>
    <?php
    $randomint = rand(1,20);
    echo "random : $randomint <br>";

    $roundedint= round(5.678);
    echo " 5.678 rounded : $roundedint <br>";
    ?>
</body>
</html>