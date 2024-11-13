<?php 
include 'koneksi.php';

$no_pasien = $_GET['no_pasien'];

$query = mysqli_query($koneksi, "DELETE FROM pasien WHERE no_pasien = '$no_pasien'") or die(mysqli_error($koneksi));
if($query) {
    echo "<script>alert('Data berhasil dihapus!'); window.location='pasien.php';</script>";
} else {
    echo "<script>alert('Data gagal dihapus'); window.location='index.php';</script>";
}

