<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Beranda</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>

    </style>
</head>

<?php
session_start();
if (!isset($_SESSION['username'])) {
    echo "<script>alert('Harap Login terlebih dahulu!')</script>";
    echo "<script>window.location.replace('Masuk.php')</script>";
}
include 'koneksi.php';

$username = $_SESSION['username'];
$query = "SELECT * FROM user WHERE username = '$username'";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query gagal: " . mysqli_error($koneksi));
}

$userData = mysqli_fetch_assoc($result);
?>

<body>
    <center>
        <header>
            <div class="container">

                <h1>Klinik Simpel</h1>
                <nav>
                    <ul>
                        <li><a href="beranda.php">Beranda</a></li>
                        <li><a href="jadwal.php">Jadwal Dokter</a></li>
                        <li><a href="pasien.php">Data Pasien</a></li>
                        <li><a href="rmedis.php">Rekam Medis</a></li>
                        <li><a href="kontak.php">Kontak</a></li>
                        
                    </ul>
                </nav>
            </div>
        </header>
    </center>
    <div class="profile">
        <center>
            <h2>Selamat Datang, <?php echo ($userData['username']), "!"; ?></h2>
        </center>
    </div>

    <main class="container">
        <section class="info">
            <h2>Informasi Klinik</h2>
            <p>Klinik Simpel menyediakan layanan kesehatan terbaik untuk Anda dan keluarga. Kami memiliki dokter yang berpengalaman dan fasilitas yang memadai.</p>
        </section>

        <section class="services">
            <h2>Layanan Kami</h2>
            <ul>
                <li><i class="fas fa-stethoscope"></i> Pemeriksaan Umum</li>
                <li><i class="fas fa-user-md"></i> Konsultasi Dokter Spesialis</li>
                <li><i class="fas fa-syringe"></i> Vaksinasi</li>
                <li><i class="fas fa-flask"></i> Laboratorium</li>
                <li><i class="fas fa-pills"></i> Pengobatan</li>
            </ul>
        </section>

        <section class="schedule">
            <h2>Jadwal Dokter</h2>
            <p>Silakan cek jadwal dokter kami untuk membuat janji temu.</p>
            <a href="jadwal.php" class="button">Lihat Jadwal</a>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Klinik Simpel. Semua hak dilindungi.</p>
        <p>Alamat: Jl. Kesehatan No. 123, Kota Sehat</p>
        <p>Telepon: (021) 123-4567</p>
    </footer>
</body>

</html>