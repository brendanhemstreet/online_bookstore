//displays the highest sold books or authors

<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$what = $_POST['what'];
$num = $_POST['num'];
$num_int = (int) $num;


$mysqli = new mysqli("127.0.0.1",'root','skinsfan5',"online_bookstore") or die("");

if ($what == 'book'){
	$exists = $mysqli -> query("CALL get_book_sales('$num')");
	while($row = $exists->fetch_assoc()) {
    	echo "id: " . $row['bookID']. " title ". $row['title']. " total sold ". $row['total_sold']. " author ". $row['name_'].  "<br>";
  }
}

elseif($what == 'author'){
	$exists = $mysqli -> query("CALL get_author_sales('$num')");
	while($row = $exists->fetch_assoc()) {
    	echo  " total sold ". $row['total_sold']. " author ". $row['name_'].  "<br>";
  }

}






$mysqli -> close();


?>
