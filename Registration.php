<?php
include_once("config.php");

if(isset($_POST["submit"]) && $_POST["password"] == $_POST["retpassword"]){
	$query = "INSERT INTO login (username, email, password) VALUES ('$_POST[username]', '$_POST[email]', '$_POST[password]')";

	
	$queryinfo = "INSERT INTO cv_info (email, tanggallahir, kelamin, username) VALUES ('$_POST[email]', '$_POST[tanggallahir]', '$_POST[kelamin]', '$_POST[username]')";

	if(mysqli_query($con, $query)){
		mysqli_query($con, $queryinfo);

		header("Location:Login.php");
	}
	else{
		die('Error: ' . mysqli_error());
	}
}
else{
	header("Location:Registration.php");
}

mysqli_close($con);
?>