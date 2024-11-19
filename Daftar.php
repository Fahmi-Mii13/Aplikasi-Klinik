<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Daftar MD5</title>
    <style>
        body {
            width: 190vh;
            min-height: 90vh;
            background-image: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url("image/Klinik.jpg");
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

        input::placeholder {
            color: white;
        }

        select {
            width: 85%;
            height: 15%;
            color: #FFF;
            border: 2px solid #00c4b3;
            outline: #00c4b3 double;
            padding: 12px 9px;
            margin-bottom: 10px;
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

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = ($_POST['password']);
    $nama_pasien = $_POST['nama_pasien'];
    $jk = $_POST['jk'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $hak_akses = 0;

    $sql = "SELECT * FROM pasien WHERE username='$username'";
    $result = mysqli_query($koneksi, $sql);
    if (!$result->num_rows > 0) {
        $sql = "INSERT INTO pasien (nama_pasien,username, password,jk,umur,alamat,no_telp,hak_akses)
                    VALUES ('$nama_pasien','$username', '$password','$jk','$umur','$alamat','$no_telp',$hak_akses)";
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
        <form action="" method="POST">
            <center>
                <p style="font-size: 2rem; font-weight: 800;color:#00c4b3">Daftar Aplikasi Klinik</p>
                <input type="text" placeholder="Nama Lengkap" name="nama_pasien" required><br><br>
                <input type="number" placeholder="Umur" name="umur" required><br><br>
                <select name="jk" id="jk">
                    <option value="">Jenis Kelamin</option>
                    <option value="laki-laki">Laki-Laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
                <input type="text" placeholder="Nomor telp" name="no_telp" required><br><br>
                <input type="text" placeholder="Alamat" name="alamat" required><br><br>
                <input type="text" placeholder="Username" name="username" required><br><br>
                <input type="password" placeholder="Password" name="password" required><br><br>
                <center><button name="submit" class="btn">Daftar</button></center>
                <br> <br> <br> <br>
                <p>Sudah punya akun? <a href="Masuk.php">Login Disini!</a></p>
            </center>
        </form>
    </div>
</body>

</html>