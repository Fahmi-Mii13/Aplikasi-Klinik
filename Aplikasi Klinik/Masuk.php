<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login Klinik</title>
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
 
// if (!isset($_SESSION['username'])) {
//     header("Location: Beranda.php");
// }
 
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
 
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($koneksi, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: Beranda.php");
    } else {
        echo "<script>alert('Username atau password salah!')</script>";
    }
}
?>
<body>
    <div class="container">
        <form action="Query.php" method="POST">
            <p  style="font-size: 2rem; font-weight: 800;">Login</p>
                <input type="text" placeholder="Username" name="username"><br><br>
                <input type="password" placeholder="Password" name="password"><br><br>
                <center><button name="submit" class="btn">Login</button></center>
            <p >Belum punya akun? <a href="Daftar.php">Daftar Disini!</a></p>
		</form>
    </div>
</body>
</html>