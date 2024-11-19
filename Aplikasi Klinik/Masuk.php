<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login Klinik</title>
    <style>
        body {
            width: 190vh;
            min-height: 90vh;
            background-image: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url("image/Klinik08.webp");
            background-position: center;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: 400px;
            min-height: 400px;
            background-color: rgba(212, 255, 251, 0.8);
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
            padding: 20px;
        }

        .btn {
            display: block;
            width: 40%;
            padding: 10px 10px;
            text-align: center;
            border: none;
            background: #00c4b3;
            outline: #00c4b3 double;
            border-radius: 30px;
            font-size: 1.2rem;
            color: #FFF;
            cursor: pointer;
            transition: .3s;
        }

        input::placeholder {
            color: white;
        }

        input {
            width: 80%;
            height: 20%;
            color: #FFF;
            border: 2px solid #00c4b3;
            outline: #00c4b3 double;
            padding: 13px 10px;
            font-size: 1rem;
            border-radius: 30px;
            background: #0fd6c5;
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
    header("Location: Beranda.php");
} else {
    echo "<script>alert('Username atau password salah!')</script>";
}
}
?>

<body>
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
</body>

</html>