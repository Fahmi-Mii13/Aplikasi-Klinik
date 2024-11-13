// <!doctype html>
// <html>

<head>
    <meta charset="utf-8">
    <title>Beranda</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<?php
session_start();
if (!isset($_SESSION['username'])) {
    echo "<script>alert('Harap Login terlebih dahulu!')</script>";
    echo "<script>window.location.replace('Masuk.php')</script>";
}

// Koneksi ke database
$server = "localhost";
$user = "root";
$pass = "";
$database = "login";

$koneksi = mysqli_connect($server, $user, $pass, $database);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil data pengguna
$username = $_SESSION['username'];
$query = "SELECT * FROM user WHERE username = '$username'"; // Ganti 'users' dengan nama tabel yang sesuai
$result = mysqli_query($koneksi, $query);

// Cek apakah query berhasil
if (!$result) {
    die("Query gagal: " . mysqli_error($koneksi));
}

$userData = mysqli_fetch_assoc($result);
?>

<body>
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
            <div class="profile">
                <span>Welcome, <?php echo htmlspecialchars($userData['username']); ?></span> <!-- Ganti 'name' dengan kolom yang sesuai -->
                <a href="logout.php" class="logout">Logout</a>
            </div>
        </div>
    </header>

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
        < p>&copy; 2023 Klinik Simpel. Semua hak dilindungi.</p>
    </footer>
</body>

</html>
