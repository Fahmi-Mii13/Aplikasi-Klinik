<?php
require 'vendor/autoload.php';
use Dompdf\Dompdf;

$dompdf = new Dompdf();

$server = "localhost";
$user = "root";
$pass = "";
$database = "klinik";
 
$koneksi = mysqli_connect($server, $user, $pass, $database);
$queryPasien = mysqli_query($koneksi, "SELECT * FROM pasien");
if (!$queryPasien) {
    die('Error: ' . mysqli_error($koneksi)); 
}
$content = '
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Data Pasien</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .title {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2 class="title">Data Pasien - Klinik Simpel</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pasien</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>No Telp</th>
            </tr>
        </thead>
        <tbody>';

$nomor = 1;
while ($row = mysqli_fetch_assoc($queryPasien)) {
    $content .= '
            <tr>
                <td>' . $nomor++ . '</td>
                <td>' . htmlspecialchars($row['nama_pasien']) . '</td>
                <td>' . htmlspecialchars($row['jk']) . '</td>
                <td>' . htmlspecialchars($row['alamat']) . '</td>
                <td>' . htmlspecialchars($row['no_telp']) . '</td>
            </tr>';
}

$content .= '
        </tbody>
    </table>
</body>
</html>';

$dompdf->loadHtml($content);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream("data_pasien.pdf", ["Attachment" => 1]);
?>
