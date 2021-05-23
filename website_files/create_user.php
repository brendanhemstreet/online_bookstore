//queries sent to db to create a normal user

<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$login_name=$_POST['loginname'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$address=$_POST['address'];


if ($firstname&&$lastname&&$login_name&&$password&&$phone){
	$con = new mysqli("127.0.0.1",'root','skinsfan5',"online_bookstore") or die("unable to connect");


	$con -> query("INSERT INTO customer_data(f_name, l_name, login_name, address, password_, phone) VALUES('$firstname', '$lastname', '$login_name', '$address', '$password', '$phone')") or die("failed");

	$con -> query("CREATE USER '$login_name'@'localhost' IDENTIFIED BY '$password'") or die("");

	$con -> query("GRANT ALL PRIVILEGES ON * . * TO '$login_name'@'localhost'") or die("");


}


	$con -> close();

	header("Location: index.html");




?>
