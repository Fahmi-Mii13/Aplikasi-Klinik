<?php 
include 'koneksi.php';

$no_dokter = $_GET['no_dokter'];

$query = mysqli_query($koneksi, "DELETE FROM dokter WHERE no_dokter = '$no_dokter'") or die(mysqli_error($koneksi));
if($query) {
    echo "<script>alert('Data berhasil dihapus!'); window.location='dokter.php';</script>";
} else {
    echo "<script>alert('Data gagal dihapus'); window.location='dokter.php';</script>";
}

?>
