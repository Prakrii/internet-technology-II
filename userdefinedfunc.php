<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>userdefined</title>
</head>
<body>
    <?php
    $num1 = 2;
    $num2 = 3;
    function sum($num1,$num2){
        return $num1+$num2;
    }
    $abcd = sum($num1,$num2);
    echo $abcd;
    ?>
</body>
</html>