<?php
include 'koneksi.php';

$no_dokter = $_POST['no_dokter'];
$nama_dokter = $_POST['nama_dokter'];
$spesialis = $_POST['spesialis'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];


$query = mysqli_query($koneksi, "UPDATE dokter SET no_dokter='$no_dokter', nama_dokter='$nama_dokter', spesialis='$spesialis', alamat='$alamat', no_telp='$no_telp' WHERE no_dokter='$no_dokter'") or die(mysqli_error($koneksi));
if ($query) {
    echo "<script>alert('Data berhasil diedit!'); window.location='dokter.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
}
