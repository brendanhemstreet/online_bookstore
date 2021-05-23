//queries for adding a comment about a book

<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$comment = $_POST['comment'];
$id = $_POST['bookID'];
$score = $_POST['score'];
$name = $_POST['name'];
$id_int = (int) $id;
$score_int = (int) $score;

$mysqli = new mysqli("127.0.0.1",'root','skinsfan5',"online_bookstore") or die("");

$query1 = $mysqli -> query("CALL comment_('$id_int', '$name', '$score_int', '$comment')");


header('Location: comment_success.php');


$mysqli -> close();


?>
