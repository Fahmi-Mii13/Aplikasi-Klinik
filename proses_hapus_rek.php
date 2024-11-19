<?php 
include 'koneksi.php';

$nama_pasien = $_GET['nama_pasien'];

$query = mysqli_query($koneksi, "DELETE FROM rkmedis WHERE nama_pasien = '$nama_pasien'") or die(mysqli_error($koneksi));
if($query) {
    echo "<script>alert('Data berhasil dihapus!'); window.location='rmedis.php';</script>";
} else {
    echo "<script>alert('Data gagal dihapus'); window.location='rmedis.php';</script>";
}

?>
