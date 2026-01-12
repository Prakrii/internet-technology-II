<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOKS</title>
</head>
<body>
    <form action="#" method='POST'>
Title: <input type="text" name="title" required > <br>
Author: <input type="text" name="author" required><br>
Price: <input type="float" name="price" required><br>
submit : <input type="submit">

    
</form>

<?php
$host = "localhost";
$dbname = "newdb";
$username = "root";
$password = "";

$dsn = "mysql:host=$host;dbname=$dbname;charset=UTF8";
try {
    $pdo = new PDO($dsn, $username , $password );

    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
 catch (PDOException $e){
    echo "DB connection FAILED: ". $e ->getMessage();
 }
//******************************************* */
//we could also have used require db_connection.php
//******************************************** */
$sql = "INSERT INTo books (title, author, price)
VALUES (:title , :author , :price )";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(':title',$title);
$stmt->bindParam(':author',$author);
$stmt->bindParam(':price',$price);
if ($_SERVER['REQUEST_METHOD']==='POST') {
 $title = $_POST['title'];
 $author = $_POST['author'];
 $price = $_POST['price'];
 echo "data stored succesfully";
 $stmt->execute();
}

?>
</body>
</html>