<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokter Gigi - Klinik Simpel</title>
    <link rel="stylesheet" href="../css/dokter.css">
    <?php
    require_once '../koneksi.php';
    session_start();
    $username = $_SESSION['username'];
    $query = "SELECT * FROM pasien WHERE username = '$username'";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Query gagal: " . mysqli_error($koneksi));
    }

    $userData = mysqli_fetch_assoc($result);
    ?>
</head>

<body>
    <header>
        <div class="container">
            <h1>Klinik Simpel</h1>
        </div>
    </header>

    <main class="container">
        <a class="lihatsemua" style="margin-bottom: 30px;" href="../Beranda.php">KEMBALI</a>
        <section class="flex-container">
            <div>
                <div>
                    <img src="../image/FSpeDok/LI3.png" width="100px">
                    <p>Joko Pranowo</p>
                    <p>0814586337854</p>
                    <p><b>SENIN</b> | Jadwal 07:00 - 11:00</p>
                    <div>
                        <button class="bookingButton">BOOKING</button>
                    </div>
                    <div class="popup-overlay" style="display: none;">
                        <div class="popup">
                            <span class="close">&times;</span>
                            <div class="popup-content">
                                <h2>Booking Berhasil!</h2>
                                <p>Selamat <?php echo ($userData['nama_pasien']); ?>, Anda telah berhasil booking dokter.</p>
                                <p>Tim kami akan segera menghubungi Anda untuk konfirmasi lebih lanjut.</p>
                                <button class="closePopupButton">Tutup</button>
                            </div>
                            <script src="script.js"></script>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <img src="../image/FSpeDok/LI5.png" width="100px">
                    <p>Hendra</p>
                    <p>081234325876</p>
                    <p><b>SELASA</b> | Jadwal 07:00 - 11:00</p>
                    <div>
                        <button class="bookingButton">BOOKING</button>
                    </div>
                    <div class="popup-overlay" style="display: none;">
                        <div class="popup">
                            <span class="close">&times;</span>
                            <div class="popup-content">
                                <h2>Booking Berhasil!</h2>
                                <p>Selamat <?php echo ($userData['nama_pasien']); ?>, Anda telah berhasil booking dokter.</p>
                                <p>Tim kami akan segera menghubungi Anda untuk konfirmasi lebih lanjut.</p>
                                <button class="closePopupButton">Tutup</button>
                            </div>
                            <script src="script.js"></script>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <img src="../image/FSpeDok/PUN4.png" width="100px">
                    <p>Susi Astuti</p>
                    <p>0867985433444</p>
                    <p><b>RABU</b> | Jadwal 07:00 - 11:00</p>
                    <div>
                        <button class="bookingButton">BOOKING</button>
                    </div>
                    <div class="popup-overlay" style="display: none;">
                        <div class="popup">
                            <span class="close">&times;</span>
                            <div class="popup-content">
                                <h2>Booking Berhasil!</h2>
                                <p>Selamat <?php echo ($userData['nama_pasien']); ?>, Anda telah berhasil booking dokter.</p>
                                <p>Tim kami akan segera menghubungi Anda untuk konfirmasi lebih lanjut.</p>
                                <button class="closePopupButton">Tutup</button>
                            </div>
                            <script src="script.js"></script>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <img src="../image/FSpeDok/LI4.png" width="100px">
                    <p>Al Dean</p>
                    <p>085432335255</p>
                    <p><b>KAMIS</b> | Jadwal 09:00 - 11:00</p>
                    <div>
                        <button class="bookingButton">BOOKING</button>
                    </div>
                    <div class="popup-overlay" style="display: none;">
                        <div class="popup">
                            <span class="close">&times;</span>
                            <div class="popup-content">
                                <h2>Booking Berhasil!</h2>
                                <p>Selamat <?php echo ($userData['nama_pasien']); ?>, Anda telah berhasil booking dokter.</p>
                                <p>Tim kami akan segera menghubungi Anda untuk konfirmasi lebih lanjut.</p>
                                <button class="closePopupButton">Tutup</button>
                            </div>
                            <script src="script.js"></script>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <img src="../image/FSpeDok/PUN3.png" width="100px">
                    <p>Jelita</p>
                    <p>0899543335555</p>
                    <p><b>JUMAT</b> | Jadwal 13:00 - 15:00</p>
                    <div>
                        <button class="bookingButton">BOOKING</button>
                    </div>
                    <div class="popup-overlay" style="display: none;">
                        <div class="popup">
                            <span class="close">&times;</span>
                            <div class="popup-content">
                                <h2>Booking Berhasil!</h2>
                                <p>Selamat <?php echo ($userData['nama_pasien']); ?>, Anda telah berhasil booking dokter.</p>
                                <p>Tim kami akan segera menghubungi Anda untuk konfirmasi lebih lanjut.</p>
                                <button class="closePopupButton">Tutup</button>
                            </div>
                            <script src="script.js"></script>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Klinik Simpel. Semua hak dilindungi.</p>
        <p>Alamat: Jl. Kesehatan No. 123, Kota Sehat</p>
        <p>Telepon: (021) 123-4567</p>
    </footer>
</body>

</html>