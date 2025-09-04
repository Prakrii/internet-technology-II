<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document VI</title>
</head>
<body>
    <?php
    //constants in php (they do not need  $ sign)

    define ('today', 'September 3, 2025');//defining a custom constant

    echo "<p> Today is ".today.".<br> this server is running version <strong>".PHP_OS."</strong> operating system.</p>"; //printing the defined constant using echo
    ?>
</body>
</html>