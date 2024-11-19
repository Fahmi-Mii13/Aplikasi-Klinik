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


$query = mysqli_query($koneksi, "UPDATE pasien SET nama_pasien='$nama_pasien', username='$username', password='$password', umur='$umur', jk='$jk', alamat='$alamat', no_telp='$no_telp' WHERE nama_pasien='$nama_pasien'") or die(mysqli_error($koneksi));
if($query) {
    echo "<script>alert('Data berhasil diedit!'); window.location='pasien.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
}

