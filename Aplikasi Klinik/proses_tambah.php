<?php 
include 'koneksi.php';

$no_pasien = $_POST['no_pasien'];
$nama_pasien= $_POST['nama_pasien'];
$jk= $_POST['jk'];
$alamat= $_POST['alamat'];
$no_telp = $_POST['no_telp'];


$query = mysqli_query($koneksi, "INSERT INTO pasien VALUES ('$no_pasien', '$nama_pasien', '$jk', '$alamat', '$no_telp')") or die(mysqli_error($koneksi));
if($query) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='pasien.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}

/*
Code by YukCoding Tutor
www.yukcoding.id
*/
?>