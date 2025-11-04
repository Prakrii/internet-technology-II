<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1.9</title>
</head>
<body>

// 1.9 Write a PHP script that declares $isLoggedIn = true; and $isAdmin = false; and use var_dump() to check conditions with && and ||.

<?php 


$isLoggedIn = true;
$isAdmin = false;

echo "isLoggedIn : ";
var_dump($isLoggedIn);

echo "<br>"."isAdmin : ";
var_dump($isAdmin);

echo "<br>";

if($isLoggedIn && $isAdmin) {
    echo "Admin Features are enabled and Login Successfully";
}
else if($isLoggedIn || $isAdmin){
    echo "User id logged in but not an admin";
}
else{
    echo "User is not logged in.";
}

?>
    
</body>
</html>