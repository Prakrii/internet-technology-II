<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Form</title>
</head>
<body>
    <form action="" method='POST'>
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '' ;?>">
        <input type="submit" value="Send">
    </form>
    <?php

    if ($_SERVER['REQUEST_METHOD']==='POST'){
       
if (isset(($_POST['name']))){

    $name = htmlspecialchars($_POST['name']);
        
    echo "$name";
    
}
    }

    
    ?>
</body>
</html>