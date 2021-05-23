//queries to display n useful comments for a book

<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$num = $_POST['num'];
$bookID = $_POST['book'];
$blank = "";

$bookID_int = (int)$bookID;
$num_int= (int)$num;

$mysqli = new mysqli("127.0.0.1",'root','skinsfan5',"online_bookstore") or die("");

$exists = $mysqli -> query("CALL n_useful_comments('$bookID_int', '$num_int')");

while($row = $exists->fetch_assoc()) {
    echo "id: " . $row["bookID"]. " score "  . $row["score"].  " comment: " . $row["comment_"]. " avg feedback: " . $row["avg_feedback"].  "<br>";
  }



$mysqli -> close();


?>
