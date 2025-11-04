<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2.3</title>
</head>
<body>
<!-- 2.3 Use elseif to grade a score: A (≥90), B (≥75), C (≥60), F (else). -->
    <?php
    $grade = 50;
    echo "$grade : "?? 0;
    
    if ($grade>=90){
        echo "A";
    }
    elseif ($grade>=75){
        echo "B";
    }
    elseif ($grade>=60){
        echo "C";
    }
    else{
        echo"Fail";
    }

    ?>
</body>
</html>