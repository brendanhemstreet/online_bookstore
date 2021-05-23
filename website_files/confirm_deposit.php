//sends query to db when a user deposits money to their accoun

<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$amount = $_POST['amount'];
$name = $_POST['name'];
$amount_float = (float) $amount;


$mysqli = new mysqli("127.0.0.1",'root','skinsfan5',"online_bookstore") or die("");

$query1 = $mysqli -> query("CALL deposit('$amount', '$name')");


header('Location: deposit_success.php');


$mysqli -> close();


?>
