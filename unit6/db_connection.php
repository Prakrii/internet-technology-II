<?php
$host = "localhost";
$dbname = "newdb";
$username = "root";
$password = "";

$dsn = "mysql:host=$host;dbname=$dbname;charset=UTF8";

try {
    $pdo = new PDO($dsn, $username , $password );

    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "DATABASE connection Successfull";

}
 catch (PDOException $e){
    echo "DB connection FAILED: ". $e ->getMessage();
 }

?>