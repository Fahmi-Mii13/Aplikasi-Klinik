<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Daftar MD5</title>
<style>
body {
    width: 100%;
    min-height: 100vh;
	background-color: antiquewhite;
    background-position: center;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
}

.container {
    width: 400px;
    min-height: 400px;
    background: #FFBFA0;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0,0,0,.3);
    padding: 40px 30px;
}
	
.btn {
    display: block;
    width: 40%;
    padding: 10px 10px;
    text-align: center;
    border: none;
    background: #FF9D5C;
    outline: #FF7422 double;
    border-radius: 30px;
    font-size: 1.2rem;
    color: #FFF;
    cursor: pointer;
    transition: .3s;
}
	
input {
    width: 80%;
    height: 20%;
	color: #000000;
    border: 2px solid #e7e7e7;
    padding: 13px 10px;
    font-size: 1rem;
    border-radius: 30px;
    background: #FFE3CD;
    outline: none;
    transition: .3s;
}
	
</style>
</head>
<?php
include 'koneksi.php';
session_start();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
 
        $sql = "SELECT * FROM user WHERE username='$username'";
        $result = mysqli_query($koneksi, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO user (username, password)
                    VALUES ('$username', '$password')";
            $result = mysqli_query($koneksi, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $username = "";
                $_POST['password'] = "";
				echo "<script>window.location.replace('Masuk.php')</script>";
            } else {
                echo "<script>alert('Maaf Terjadi kesalahan.')</script>";
            }
		}
}

 
?>
<body>
<div class="container">
        <form action="" method="POST" >
            <p  style="font-size: 2rem; font-weight: 800;">Register</p>     
                <input type="text" placeholder="Username" name="username"  required><br><br>
                <input type="password" placeholder="Password" name="password"  required><br><br>
                <center><button name="submit" class="btn">Daftar</button></center>
            <p >Sudah punya akun? <a href="Masuk.php">Login Disini!</a></p>
        </form>
    </div>
</body>
</html>