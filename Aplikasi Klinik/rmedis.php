<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekam Medis - Klinik Simpel</title>
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

    <main class="container">

        <h2>Rekam Medis</h2>
        <div style="overflow: auto;">
            <a href="form_tambah_rek.php" class="button">Tambah Data Baru</a>
            <table border="1" class="table">
                <thead>
                    <tr>
                        <th>No Rekam</th>
                        <th>Nama Pasien</th>
                        <th>Tanggal Kunjungan</th>
                        <th>Nama Dokter</th>
                        <th>Keluhan</th>
                        <th>Diagnosis</th>
                        <th>Terapi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'koneksi.php';

                    $sql = "SELECT * FROM rkmedis";
                    $result = $koneksi->query($sql);

                    if ($result->num_rows > 0) {

                        while ($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo $row['no_rek']; ?></td>
                                <td><?php echo $row['nama_pasien']; ?></td>
                                <td><?php echo $row['tgl_kunjung']; ?></td>
                                <td><?php echo $row['nama_dokter']; ?></td>
                                <td><?php echo $row['keluhan']; ?></td>
                                <td><?php echo $row['diagnosis']; ?></td>
                                <td><?php echo $row['terapi']; ?></td>
                                <td style=" display: flex; justify-content: space-between; align-items: center; padding: 5px; gap: 5px;">
                                    <a href="form_edit_rek.php?nama_pasien=<?php echo $row['nama_pasien']; ?>" class="button" style="background-color: #007bff; padding: 5px 10px; text-decoration: none;">Edit</a>
                                    <a href="detail_pasien.php?no_rek=<?php echo $row['no_rek']; ?>" class="button" style="background-color: #007bff; padding: 5px 10px; text-decoration: none;">Detail</a>
                                    <a href="proses_hapus_rek.php?nama_pasien=<?php echo $row['nama_pasien']; ?>" onclick="return confirm('Yakin hapus data?')" class="button" style="background-color: #dc3545; padding: 5px 10px; text-decoration: none;">Hapus</a>
                                </td>
                            </tr>
                        <?php
                        }
                    } else {
                        echo "<tr><td colspan='6'>Tidak ada data rekam medis</td></tr>";
                    } 
                    $koneksi->close();
                    ?>
                </tbody>
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