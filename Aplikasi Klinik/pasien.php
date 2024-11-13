<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pasien - Klinik Simpel</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

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
        </div>
    </header>

    <main class="container">
        <div style="overflow: auto;">
            <br />
            <a href="form_tambah.php" class="button">Tambah Data Baru </a>


                <table border="1" class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Pasien</th>
                            <th>Nama Pasien</th>
                            <th>Jenis Kelamin</th>
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
                                <td><?php echo $data['no_pasien']; ?></td>
                                <td><?php echo $data['nama_pasien']; ?></td>
                                <td><?php echo $data['jk']; ?></td>
                                <td><?php echo $data['alamat']; ?></td>
                                <td><?php echo $data['no_telp']; ?></td>
                                <td width="90px" align="center">
                                    <a href="form_edit.php?no_pasien=<?php echo $data['no_pasien']; ?>" class="button">Edit</a>
                                    <p></p>
                                    <a href="proses_hapus.php?no_pasien=<?php echo $data['no_pasien']; ?>" onclick="return confirm('Yakin hapus data?')" class="button">Hapus</a>
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