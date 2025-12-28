<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uploadfile</title>
</head>
<body>
    <?php
    $directory = "uploads";
    $files = scandir($directory);
    
    foreach ($files as $f){
        echo $f . "<br>";
    }
    ?>
</body>
</html>