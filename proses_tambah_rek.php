<?php 
include 'koneksi.php';

$no_rek = $_POST['no_rek'];
$nama_pasien = $_POST['nama_pasien'];
$tgl_kunjung = $_POST['tgl_kunjung'];
$nama_dokter = $_POST['nama_dokter'];
$keluhan = $_POST['keluhan'];
$diagnosis = $_POST['diagnosis'];
$terapi = $_POST['terapi'];


$query = mysqli_query($koneksi, "INSERT INTO rkmedis VALUES  ('$no_rek','$nama_pasien', '$tgl_kunjung','$nama_dokter','$keluhan', '$diagnosis', '$terapi')") or die(mysqli_error($koneksi));
if($query) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='rmedis.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}

?>
