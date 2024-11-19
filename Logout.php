<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SessionLogout</title>
</head>

<body>
<?php 
 
session_start();
session_destroy();
echo('Session Sudah Dihapus');
	header("Location: Masuk.php");
	
?>
</body>
</html>