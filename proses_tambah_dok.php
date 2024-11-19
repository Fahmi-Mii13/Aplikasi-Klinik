<?php 
include 'koneksi.php';

$no_dokter = $_POST['no_dokter'];
$nama_dokter = $_POST['nama_dokter'];
$spesialis = $_POST['spesialis'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];


$query = mysqli_query($koneksi, "INSERT INTO dokter VALUES  ('$no_dokter','$nama_dokter', '$spesialis','$alamat','$no_telp')") or die(mysqli_error($koneksi));
if($query) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='dokter.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}

?>
