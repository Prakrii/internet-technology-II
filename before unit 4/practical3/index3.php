<!-- 3. Given `$users = [['id' => 1, 'name' => 'Bob'], ['id' => 2, 'name' => 'Alice']]`, display the name "Alice". -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3.3</title>
</head>
<body>
    <?php
    $users = [['id' => 1, 'name' => 'Bob'], ['id' => 2, 'name' => 'Alice']];
    foreach($users as $x){
        if ($x['id'] == 2) {
        echo $x['name'];
    }
    }
    ?>
</body>
</html>