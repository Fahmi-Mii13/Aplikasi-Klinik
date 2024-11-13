<?php 
include 'koneksi.php';

// $id = $_POST['id'];
$no_pasien = $_POST['no_pasien'];
$nama_pasien = $_POST['nama_pasien'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];


$query = mysqli_query($koneksi, "UPDATE pasien SET no_pasien='$no_pasien', nama_pasien='$nama_pasien', jk='$jk', alamat='$alamat', no_telp='$no_telp' WHERE no_pasien='$no_pasien'") or die(mysqli_error($koneksi));
if($query) {
    echo "<script>alert('Data berhasil diedit!'); window.location='pasien.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
}

