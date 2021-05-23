//queries for adding a book to the database


<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$book = $_POST['book'];
$pub = $_POST['pub'];
$lang = $_POST['lang'];
$date = $_POST['date'];
$num = $_POST['num'];
$stock = $_POST['stock'];
$price = $_POST['price'];
$title = $_POST['title'];
$ibsn = $_POST['ibsn'];

$book_int = (int) $book;
$num_int = (int) $num;
$stock_int = (int) $stock;
$price_int = (float) $price;


$mysqli = new mysqli("127.0.0.1",'root','skinsfan5',"online_bookstore") or die("");

$exists = $mysqli -> query("CALL add_book('$pub', '$title', '$lang', '$date', '$num', '$stock', '$price', 4.2, 0, '$ibsn', '$book')");

echo "success";


$mysqli -> close();


?>
