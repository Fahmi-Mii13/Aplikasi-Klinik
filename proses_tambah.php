<?php 
include 'koneksi.php';

$nama_pasien = $_POST['nama_pasien'];
$jk = $_POST['jk'];
$username = $_POST['username'];
$password = $_POST['password'];
$umur = $_POST['umur'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$hak_akses = 0;

$query = mysqli_query($koneksi, "INSERT INTO pasien VALUES ('$nama_pasien','$username','$password', '$jk', '$umur', '$alamat', '$no_telp', '$hak_akses')") or die(mysqli_error($koneksi));
if($query) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='pasien.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}

