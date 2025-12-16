<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document V</title>
</head>
<body>
    <?php
    //Examples  of LOGICAL operators
    $age = 25;
    $isStudent = true;
    //using AND operator
    if ($age>18 && $isStudent){
        echo "<p>Eligible for a student discount</p>";// using echo to display the logical output
    }
    //using OR operator
    $rolledSix = false;
    $rolledFive = true;
    if ($rolledSix || $rolledFive){
        echo "<p> you rolled 5 or a 6</p>";// using echo to display the logical output
    }

    //Using NOT operator 
    $isEmpty = false;
    if (!$isEmpty){
        echo "<p>The variable is not empty</p>";// using echo to display the logical output
    }

    // Using Null Coalesing Operator 
    $username = $_GET['user'] ?? 'Guest';// if $_GET ['user'] is not set then the $username will be 'Guest'
    echo "<p>Welcome, ".$username."!</p>";
    ?>
</body>
</html>
