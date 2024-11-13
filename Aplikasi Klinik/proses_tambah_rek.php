<?php 
include 'koneksi.php';

$nama_pasien = $_POST['nama_pasien'];
$tgl_kunjung = $_POST['tgl_kunjung'];
$keluhan = $_POST['keluhan'];
$diagnosis = $_POST['diagnosis'];
$terapi = $_POST['terapi'];


$query = mysqli_query($koneksi, "INSERT INTO rkmedis VALUES  ('$nama_pasien', '$tgl_kunjung','$keluhan', '$diagnosis', '$terapi')") or die(mysqli_error($koneksi));
if($query) {
    echo "<script>alert('Data berhasil diedit!'); window.location='rmedis.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
}

/*
Code by YukCoding Tutor
www.yukcoding.id
*/
?>