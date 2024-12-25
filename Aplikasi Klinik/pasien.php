<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pasien - Klinik Simpel</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<?php
session_start();
if ($_SESSION['hak_akses'] == "0") {
    echo "<script>
    alert('Anda tidak memiliki hak akses')
</script>";
    echo "<script>
    window.location.replace('Beranda.php')
</script>";
}
?>

<body>
    <header>
        <div class="container">
            <h1>Klinik Simpel</h1>
            <nav>
                <ul>
                    <li><a href="Beranda.php">Beranda</a></li>
                    <li><a href="jadwal.php">Jadwal Dokter</a></li>
                    <li><a href="pasien.php">Data Pasien</a></li>
                    <li><a href="rmedis.php">Rekam Medis</a></li>
                    <li><a href="dokter.php">Data Dokter</a></li>
                    <li><a style="text-decoration:none;color: #0ae7ff;font-weight: bold;" href="logout.php" class="logout">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container">
        <h2>Data Pasien</h2>
        <div style="overflow: auto;">
            <a href="form_tambah.php" class="button">Tambah Data Baru </a>
            <a href="pdf_pasien.php" class="button">Unduh PDF </a>


            <table border="1" class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pasien</th>
                        <th>Username</th>
                        <th>Jenis Kelamin</th>
                        <th>Umur</th>
                        <th>Alamat</th>
                        <th>No Telp</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                    include "koneksi.php";
                    $query = mysqli_query($koneksi, "SELECT * FROM pasien") or die(mysqli_error($koneksi));
                    $nomor = 1;
                    while ($data = mysqli_fetch_array($query)) { ?>
                        <tr>
                            <td align="center"><?php echo $nomor++; ?>.</td>
                            <td><?php echo $data['nama_pasien']; ?></td>
                            <td><?php echo $data['username']; ?></td>
                            <td><?php echo $data['jk']; ?></td>
                            <td><?php echo $data['umur']; ?></td>
                            <td><?php echo $data['alamat']; ?></td>
                            <td><?php echo $data['no_telp']; ?></td>
                            <td style=" display: flex; justify-content: space-between; align-items: center; padding: 5px; gap: 5px;">
                                 <a href="form_edit.php?nama_pasien=<?php echo $data['nama_pasien']; ?>" class="button" style="background-color: #007bff; padding: 5px 10px; text-decoration: none;">Edit</a>
                                 <a href="proses_hapus.php?nama_pasien=<?php echo $data['nama_pasien']; ?>" onclick="return confirm('Yakin hapus data?')" class="button" style="background-color: #dc3545; padding: 5px 10px; text-decoration: none;">Hapus</a>
                            </td>
                        </tr>
                    <?php
                    } ?>
            </table>
        </div>
    </main>

    <footer>
        <p>&copy; 2023 Klinik Simpel. Semua hak dilindungi.</p>
        <p>Alamat: Jl. Kesehatan No. 123, Kota Sehat</p>
        <p>Telepon: (021) 123-4567</p>
    </footer>
</body>

</html>
                    