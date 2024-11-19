<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Beranda</title>
    <link rel="stylesheet" href="css/styleberanda.css">
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
$query = "SELECT * FROM pasien WHERE username = '$username'";
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
                        <li><a href="dokter.php">Data Dokter</a></li>
                        <li><a style="text-decoration:none;color: #0ae7ff;font-weight: bold;" href="logout.php" class="logout">Logout</a></li>
                    </ul>
                </nav>
            </div>
        </header>
    </center>
    <div class="profile">
        <center>
            <h2>Selamat Siang, <?php echo ($userData['nama_pasien']), "!"; ?></h2>
        </center>
    </div>

    <main class="container">
        <section>
            <div>
                <div>
                    <div>
                        <h2>
                            Spesialisasi Medis
                        </h2>
                        <p>
                            Berbagai pilihan spesialisasi dokter
                        </p>
                    </div>
                </div>
                <div class="specializations">
                    <div class="specialization">
                        <a href="Kandungan.php">
                            <img alt="Icon of Sp. Kandungan &amp; Kebidanan" height="60" src="image/Dokter.png" width="60" />
                            <p>
                                Sp. Kandungan &amp; Kebidanan
                            </p>
                        </a>
                    </div>
                    <div class="specialization">
                        <img alt="Icon of Sp. Kulit &amp; Kelamin" height="60" src="image/Dokter.png" width=" 60" />
                        <p>
                            Sp. Kulit &amp; Kelamin
                        </p>
                    </div>
                    <div class="specialization">
                        <img alt="Icon of Sp. THT" height="60" src="image/Dokter.png" width="60" />
                        <p>
                            Sp. THT
                        </p>
                    </div>
                    <div class="specialization">
                        <img alt="Icon of Sp. Jiwa" height="60" src="image/Dokter.png" width="60" />
                        <p>
                            Sp. Jiwa
                        </p>
                    </div>
                    <div class="specialization">
                        <img alt="Icon of Sp. Penyakit Dalam" height="60" src="image/Dokter.png" width="60" />
                        <p>
                            Sp. Penyakit Dalam
                        </p>
                    </div>
                    <div class="specialization">
                        <img alt="Icon of Sp. Anak" height="60" src="image/Dokter.png" width="60" />
                        <p>
                            Sp. Anak
                        </p>
                    </div>
                    <div class="specialization">
                        <img alt="Icon of Sp. Mata" height="60" src="image/Dokter.png" width="60" />
                        <p>
                            Sp. Mata
                        </p>
                    </div>
                    <div class="specialization">
                        <img alt="Icon of Dokter Gigi" height="60" src="image/Dokter.png" width="60" />
                        <p>
                            Dokter Gigi
                        </p>
                    </div>
                </div>
                <br>
                <a href="#" class="lihatsemua">
                    Lihat Semua
                </a>
            </div>
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