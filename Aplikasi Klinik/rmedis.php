<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekam Medis - Klinik Simpel</title>
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
     
        <h2>Rekam Medis</h2>
        <br>
    <a href="form_tambah_rek.php">
                <button>+ Tambah Data Baru</button>
            </a>
        <table>
            <thead>
                <tr>
                    <th>Nama Pasien</th>
                    <th>Tanggal Kunjungan</th>
                    <th>Keluhan</th>
                    <th>Diagnosis</th>
                    <th>Terapi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
             include 'koneksi.php';

                // Mengambil data dari tabel rekam medis
                $sql = "SELECT nama_pasien, tgl_kunjung, keluhan, diagnosis, terapi FROM rkmedis";
                $result = $koneksi->query($sql);

                if ($result->num_rows > 0) {
                    // Menampilkan data setiap baris
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["nama_pasien"] . "</td>";
                        echo "<td>" . $row["tgl_kunjung"] . "</td>";
                        echo "<td>" . $row["keluhan"] . "</td>";
                        echo "<td>" . $row["diagnosis"] . "</td>";
                        echo "<td>" . $row["terapi"] . "</td>";
                        echo "<td width='90px' align='center'>";
                        echo "<a href='form_edit_rek.php?nama_pasien=" . $row['nama_pasien'] . "'><button>Edit</button></a> ";
                        echo "<a href='proses_hapus_rek.php?nama_pasien=" . $row['nama_pasien'] . "' onclick='return confirm(\"Yakin hapus data?\")'><button>Hapus</button></a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>Tidak ada data rekam medis</td></tr>";
                }

                // Menutup koneksi
                $koneksi->close();
                ?>
            </tbody>
        </table>
    </main>

    <footer>
        <p>&copy; 2023 Klinik Simpel. Semua hak dilindungi.</p>
        <p>Alamat: Jl. Kesehatan No. 123, Kota Sehat</p>
        <p>Telepon: (021) 123-4567</p>
    </footer>
</body>

</html>
