<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php

session_start();
include 'koneksi.php';
 
    $username = $_POST['username'];
    $password = md5($_POST['password']);
	
 
    $query_sql = "SELECT * FROM pasien WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($koneksi, $query_sql);
	if(mysqli_num_rows($result) > 0){
  		header("location:Beranda.php");
  		$_SESSION["username"] = $username;
    } else {
        echo "<script>alert('Username atau password salah!')</script>";
		echo "<script>window.location.replace('Masuk.php')</script>";
    }

?>


<body>
</body>
</html>