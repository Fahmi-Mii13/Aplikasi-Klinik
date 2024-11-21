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

$query1 = "SELECT * FROM pasien";
$result1 = mysqli_query($koneksi, $query1);

if (!$result1) {
    die("Query gagal: " . mysqli_error($koneksi));
}
$data = mysqli_fetch_assoc($result1);


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
                        <?php
                        if ($userData['hak_akses'] == "1") {
                            echo "
                        <li><a href='pasien.php'>Data Pasien</a></li>
                        <li><a href='rmedis.php'>Rekam Medis</a></li>
                        <li><a href='dokter.php'>Data Dokter</a></li>
                        ";
                        }
                        ?>
                        <li><a style='text-decoration:none;color: #0ae7ff;font-weight: bold;' href='logout.php' class='logout'>Logout</a></li>
                    </ul>
                </nav>
            </div>
        </header>
    </center>
    <div class="profile">
        <center>
            <h2>Selamat Datang! <?php if ($userData['hak_akses'] == "1") { echo 'Admin'; }else echo'Pasien'; ?>, <?php echo ($userData['nama_pasien']), "!"; ?></h2>
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
                    <a href="Spesialis/Kandungan.php">
                        <img src="image/LogoBer/DKandung1.png" alt="Icon of Sp. Kandungan & Kebidanan" />
                    </a>
                    <p>Sp. Kandungan & Kebidanan</p>
                </div>
                <div class="specialization">
                    <a href="Spesialis/Kelamin.php">
                        <img src="image/LogoBer/DKulit1.png" alt="Icon of Sp. Kulit & Kelamin" />
                    </a>
                    <p>Sp. Kulit & Kelamin</p>
                </div>
                <div class="specialization">
                    <a href="Spesialis/THT.php">
                        <img src="image/LogoBer/DTht1.png" alt="Icon of Sp. THT" />
                    </a>
                    <p>Sp. THT</p>
                </div>
                <div class="specialization">
                    <a href="Spesialis/Jiwa.php">
                        <img src="image/LogoBer/DJiwa1.png" alt="Icon of Sp. Jiwa" />
                    </a>
                    <p>Sp. Jiwa</p>
                </div>
                <div class="specialization">
                    <a href="Spesialis/PenyakitDlm.php">
                        <img src="image/LogoBer/DDalem1.png" alt="Icon of Sp. Penyakit Dalam" />
                    </a>
                    <p>Sp. Penyakit Dalam</p>
                </div>
                <div class="specialization">
                    <a href="Spesialis/Anak.php">
                        <img src="image/LogoBer/DAnak1.png" alt="Icon of Sp. Anak" />
                    </a>
                    <p>Sp. Anak</p>
                </div>
                <div class="specialization">
                    <a href="Spesialis/Mata.php">
                        <img src="image/LogoBer/DMata1.png" alt="Icon of Sp. Mata" />
                    </a>
                    <p>Sp. Mata</p>
                </div>
                <div class="specialization">
                    <a href="Spesialis/Gigi.php">
                        <img src="image/LogoBer/DGigi1.png" alt="Icon of Dokter Gigi" />
                    </a>
                    <p>Dokter Gigi</p>
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