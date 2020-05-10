<?php
include_once("config.php");
include_once("Login.php");

// menghapus info pekerjaan
$query = "UPDATE cv_info SET namaperushaan = null, ctanggalmulai = null, cposisi = null WHERE username = '$_SESSION[username]'";
if(mysqli_query($con, $query)){
	header("Location:My_CV.php");
}
else{
	die('Error: ' . mysqli_error());
}

mysqli_close($con);
?>