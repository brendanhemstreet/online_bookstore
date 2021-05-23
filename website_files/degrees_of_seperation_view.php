//sends the quieries to get the degree 1 and 2 seperations for a given author

<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$auth = $_POST['author'];
$degree = $_POST['degree'];
$degree_int = (int) $degree;


$mysqli = new mysqli("127.0.0.1",'root','skinsfan5',"online_bookstore") or die("");

if ($degree_int == 1){
	$exists = $mysqli -> query("CALL degrees_of_seperation1('$auth')");

	while($row = $exists->fetch_assoc()) {
    	echo "degree1: " . $row['degree_1'].   "<br>";
  }
}
else{
	 $exists2 = $mysqli -> query("CALL degrees_of_seperation2('$auth')");

	while($row = $exists2->fetch_assoc()) {
    	echo "degree2: " . $row['degree_2'].   "<br>";
  }
}





$mysqli -> close();


?>
