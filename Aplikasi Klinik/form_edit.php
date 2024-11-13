<!DOCTYPE html>
<html>

<head>
	<title>Edit Kendaraan | Web Pendataan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='https://yukcoding.blogspot.com/favicon.ico' rel='icon' type='image/x-icon' />
</head>

<body>
	<div class="judul">
		<h2>Edit Pasien</h2>
	</div>

	<br />
	<a href="pasien.php">
		<button>
			< Lihat Semua Data</button>
	</a>

	<h3>Edit pasien</h3>
	<form action="proses_edit.php" method="post">
		<?php
		include "koneksi.php";
		$no_pasien = $_GET['no_pasien'];
		$query = mysqli_query($koneksi, "SELECT * FROM pasien WHERE no_pasien = '$no_pasien'") or die(mysqli_error($koneksi));
		$data = mysqli_fetch_array($query);
		?>
		<table>
			<tr>
				<td>No Pasien</td>
				<td><input type="text" name="no_pasien" value="<?php echo $data['no_pasien'] ?>" required></td>
			</tr>
			<tr>
				<td>Nama Pasien</td>
				<td><input type="text" name="nama_pasien" value="<?php echo $data['nama_pasien'] ?>" required></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="text" name="jk" value="<?php echo $data['jk'] ?>" required></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>" required></td>
			</tr>
			<tr>
				<td>No Telp</td>
				<td><input type="text" name="no_telp" value="<?php echo $data['no_telp'] ?>" required></td>
			</tr>
			<td></td>
			<td><button type="submit">Simpan</button></td>
			</tr>
		</table>
	</form>
</body>

</html>

<!--
Code by YukCoding Tutor
www.yukcoding.id
-->