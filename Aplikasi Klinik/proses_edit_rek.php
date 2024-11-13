<?php 
include 'koneksi.php';

// $id = $_POST['id'];
$nama_pasien = $_POST['nama_pasien'];
$tgl_kunjung = $_POST['tgl_kunjung'];
$keluhan = $_POST['keluhan'];
$diagnosis = $_POST['diagnosis'];
$terapi = $_POST['terapi'];


$query = mysqli_query($koneksi, "UPDATE rkmedis SET tgl_kunjung='$tgl_kunjung', nama_pasien='$nama_pasien', keluhan='$keluhan', diagnosis='$diagnosis', terapi='$terapi' WHERE tgl_kunjung='$tgl_kunjung'") or die(mysqli_error($koneksi));
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