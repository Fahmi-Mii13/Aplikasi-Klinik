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
if ($_SESSION['hak_akses']=="0") {
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
        <h2>Data Dokter</h2>
        <div style="overflow: auto;">
            <a href="form_tambah_dok.php" class="button">Tambah Data Baru </a>


            <table border="1" class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No Dokter</th>
                        <th>Nama Dokter</th>
                        <th>Spesialis</th>
                        <th>Alamat</th>
                        <th>No Telp</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                    include "koneksi.php";
                    $query = mysqli_query($koneksi, "SELECT * FROM dokter") or die(mysqli_error($koneksi));
                    $nomor = 1;
                    while ($data = mysqli_fetch_array($query)) { ?>
                        <tr>
                            <td align="center"><?php echo $nomor++; ?>.</td>
                            <td><?php echo $data['no_dokter']; ?></td>
                            <td><?php echo $data['nama_dokter']; ?></td>
                            <td><?php echo $data['spesialis']; ?></td>
                            <td><?php echo $data['alamat']; ?></td>
                            <td><?php echo $data['no_telp']; ?></td>
                            <td width="90px" align="center">
                                <a href="form_edit_dok.php?no_dokter=<?php echo $data['no_dokter']; ?>" class="button">Edit</a>
                                <a href="proses_hapus_dok.php?no_dokter=<?php echo $data['no_dokter']; ?>" onclick="return confirm('Yakin hapus data?')" class="button">Hapus</a>
                            </td>
                        </tr>
                    <?php
                    } ?>
            </table>
            <p style="color:red;">*Jika data dokter telah digunakan direkam medis maka data tersebut tidak dapat diedit/update</p>
        </div>
    </main>

    <footer>
        <p>&copy; 2023 Klinik Simpel. Semua hak dilindungi.</p>
        <p>Alamat: Jl. Kesehatan No. 123, Kota Sehat</p>
        <p>Telepon: (021) 123-4567</p>
    </footer>
</body>

</html>