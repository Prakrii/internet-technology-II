<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>readfile</title>
</head>
<body>
    
    <?php
    
    $filename = "textexample.txt";
    if (file_exists($filename)&& is_file($filename)){
        readfile($filename);
    }
    else{
        echo "FILE DOESN'T EXIST";
    }
    ?>
    
</body>
</html>