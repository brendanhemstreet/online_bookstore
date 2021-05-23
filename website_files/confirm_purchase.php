//sending queries to the db to confirm a purchase of a book

<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$login_name = $_POST['name'];
$num_of_copies = $_POST['copies'];
$bookID = $_POST['bookID'];
$blank = "";

$bookID_int = (int)$bookID;
$num_of_copies_int = (int)$num_of_copies;

$mysqli = new mysqli("127.0.0.1",'root','skinsfan5',"online_bookstore") or die("");

$exists = $mysqli -> query("CALL purchase('$bookID_int', '$login_name', '$num_of_copies_int')");

$exists2 = $mysqli -> query("UPDATE authors_ SET total_sold = total_sold + '$num_of_copies_int WHERE bookID = bookID_int");


$result = mysqli_fetch_array($exists);

if ($result == 'fail'){
	header('Location: purchase_fail.php');
}
else{
	header('Location: purchase_success.php');
}

$mysqli -> close();


?>
