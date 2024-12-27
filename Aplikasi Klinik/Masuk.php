<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login Klinik</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,700;1,700&display=swap" rel="stylesheet">
    <!-- Feather icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- My Style -->
    <link rel="stylesheet" href="css/masuk.css">
</head>
<?php

session_start();
include 'koneksi.php';


// if (!isset($_SESSION['username'])) {
//     header("Location: Beranda.php");
// }


// $sql = "SELECT * FROM pasien WHERE username='$username' AND password='$password'";
// $result = mysqli_query($koneksi, $sql);
// if ($result->num_rows > 0) {
//     $row = mysqli_fetch_assoc($result);
//     $_SESSION['username'] = $row['username'];
//     header("Location: Beranda.php");
// } else {
//     echo "<script>alert('Username atau password salah!')</script>";
// }
// }
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($koneksi, "SELECT * FROM pasien WHERE username='$username' AND password='$password'") or die(mysqli_error($koneksi));
    if ($query->num_rows > 0) {
        $row = mysqli_fetch_assoc($query);
        $_SESSION['username'] = $row['username'];
        $_SESSION['hak_akses'] = $row['hak_akses'];
        header("Location: Beranda.php");
    } else {
        echo "<script>alert('Username atau password salah!')</script>";
    }
}
?>

<body>

    <nav class="navbar">
        <a href="index.php" class="navbar-logo">Klinik<span>Gaspol</span></a>
        <div class="navbar-nav">
            <a href="index.php">Beranda</a>
            <a href="Masuk.php">Login</a>
            <a href="contact.php">Contact Us</a>
        </div>
        <div class="navbar-extra">
            <a href="Masuk.php" id="search"><i data-feather="arrow-right"></i></a>
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>

    <div class="container">
        <form action="" method="POST">
            <center>
                <p style="font-size: 2rem; font-weight: 800;color:#00c4b3">Login Aplikasi Klinik</p>
                <input type="text" placeholder="Username" name="username"><br><br>
                <input type="password" placeholder="Password" name="password"><br><br>
                <center><button name="submit" class="btn">Login</button></center

                    <br> <br> <br> <br> <br>
                <p>Belum punya akun? <a href="Daftar.php">Daftar Disini!</a></p>
            </center>

        </form>
    </div>
    <!-- Feather Icons -->
    <script>
        feather.replace();
    </script>
    <!-- My Java script-->
    <script src="JS/script.js"></script>
</body>

</html>