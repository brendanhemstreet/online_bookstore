//queries sent to the db to create a manager

<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$login_name=$_POST['login_name'];
$password=$_POST['password'];



if ($login_name){
	$con = new mysqli("127.0.0.1",'root','skinsfan5',"online_bookstore") or die("unable to connect");


	$con -> query("INSERT INTO managers(login_name) VALUES('$login_name')") or die("failed");

	$con -> query("CREATE USER '$login_name'@'localhost' IDENTIFIED BY '$password'") or die("");

	$con -> query("GRANT ALL PRIVILEGES ON * . * TO '$login_name'@'localhost'") or die("");


}


	$con -> close();

	header("Location: index.html");




?>
