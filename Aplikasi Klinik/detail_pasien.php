<!DOCTYPE html>
<html>

<head>
    <title>Detail Rekam Medis | Web Klinik 08</title>
    <link rel="stylesheet" href="css/form.css">
</head>

<body>
    <div class="judul">
        <h2>Detail Rekam Medis</h2>
    </div>

    <center>
        <br />
        <a href="rmedis.php">
            <button>
                < Lihat Semua Data</button>
        </a>
    </center>

    <?php
    // Koneksi ke database
    include "koneksi.php";

    // Ambil no_rek dari URL
    $no_rek = isset($_GET['no_rek']) ? $_GET['no_rek'] : null;

    if (!$no_rek) {
        echo "<p style='color: red; text-align: center;'>Parameter no_rek tidak ditemukan!</p>";
        exit;
    }

    // Query untuk mendapatkan detail rekam medis
    $query = "SELECT * FROM rkmedis WHERE no_rek = '$no_rek'";
    $result = $koneksi->query($query);

    if (!$result || $result->num_rows == 0) {
        echo "<p style='color: red; text-align: center;'>Data dengan no_rek $no_rek tidak ditemukan!</p>";
        exit;
    }

    // Ambil data pasien
    $data = $result->fetch_assoc();
    ?>

    <form>
        <table>
            <tr>
                <td colspan="2">
                    <center>
                        <h3>Informasi Rekam Medis</h3>
                    </center>
                </td>
            </tr>
            <tr>
                <td>No Rekam</td>
                <td><input type="text" value="<?= htmlspecialchars($data['no_rek']); ?>" readonly></td>
            </tr>
            <tr>
                <td>Nama Pasien</td>
                <td><input type="text" value="<?= htmlspecialchars($data['nama_pasien']); ?>" readonly></td>
            </tr>
            <tr>
                <td>Tanggal Kunjungan</td>
                <td><input type="date" value="<?= htmlspecialchars($data['tgl_kunjung']); ?>" readonly></td>
            </tr>
            <tr>
                <td>Nama Dokter</td>
                <td><input type="text" value="<?= htmlspecialchars($data['nama_dokter']); ?>" readonly></td>
            </tr>
            <tr>
                <td>Keluhan</td>
                <td><input type="text" value="<?= htmlspecialchars($data['keluhan']); ?>" readonly></td>
            </tr>
            <tr>
                <td>Diagnosis</td>
                <td><input type="text" value="<?= htmlspecialchars($data['diagnosis']); ?>" readonly></td>
            </tr>
            <tr>
                <td>Terapi</td>
                <td><input type="text" value="<?= htmlspecialchars($data['terapi']); ?>" readonly></td>
            </tr>
            <tr>
                <td>Print</td>
                <td><a href="pdf_rkmedis.php?no_rek=<?= htmlspecialchars($data['no_rek']); ?>" class="button" style="display: inline-block; padding: 10px 20px; background: #007bff; color: #fff; text-decoration: none; border: none; border-radius: 5px; cursor: pointer;">
                    pdf rekam medis pasien</a>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
