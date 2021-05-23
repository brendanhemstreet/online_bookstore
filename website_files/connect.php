//connects the login to either the manager page or the normal user page

<?php

$inputuser = $_POST['user'];
$inputpass = $_POST['pass'];
$login_name=$inputuser;
$password_="";
$_SESSION['login'] = $inputuser;

$mysqli = new mysqli("127.0.0.1",$inputuser,$inputpass,"online_bookstore");
if ($mysqli -> connect_errno) {
  echo "Failed to login: " . $mysqli -> connect_error;
  header("Location: fail.php");
  exit();
}
else{
	$exists = $mysqli -> query("SELECT * FROM managers WHERE login_name='$inputuser'");
	$result = mysqli_fetch_array($exists);

	echo $result[0];

	if ($result[0] == $inputuser){
		header("Location: managers.php");
	}
	else{
		header("Location: home.php");
	}
	
}



$mysqli -> close();

?>
