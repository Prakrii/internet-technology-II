<?php
require 'db_connection.php';

$sql = "SELECT * FROM books";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$books = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($books as $book){
    echo "<p>";
    echo "ID :".$book['id'].'<br>';
    echo "Title :" .$book['title'].'<br>';
    echo "Author: ".$book['author']. '<br>';
    echo "price: $".$book['price'] ;
    echo "</p>";
}
?>