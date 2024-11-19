<?php 
include 'koneksi.php';

$no_rek = $_POST['no_rek'];
$nama_pasien = $_POST['nama_pasien'];
$tgl_kunjung = $_POST['tgl_kunjung'];
$nama_dokter = $_POST['nama_dokter'];
$keluhan = $_POST['keluhan'];
$diagnosis = $_POST['diagnosis'];
$terapi = $_POST['terapi'];


$query = mysqli_query($koneksi, "UPDATE rkmedis SET no_rek='$no_rek', tgl_kunjung='$tgl_kunjung', nama_pasien='$nama_pasien',nama_dokter='$nama_dokter', keluhan='$keluhan', diagnosis='$diagnosis', terapi='$terapi' WHERE tgl_kunjung='$tgl_kunjung'") or die(mysqli_error($koneksi));
if($query) {
    echo "<script>alert('Data berhasil diedit!'); window.location='rmedis.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
}

?>
