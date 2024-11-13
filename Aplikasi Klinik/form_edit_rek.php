<!DOCTYPE html>
<html>

<head>
	<title>Edit Pasien | Web Klinik 08</title>
	<link rel="stylesheet" href="css/form.css">
</head>

<body>
	<div class="judul">
		<h2>Edit Rekam Medis</h2>
	</div>

	<center>
		<br />
		<a href="rmedis.php">
			<button>
				< Lihat Semua Data</button>
		</a>
	</center>


	<form action="proses_edit_rek.php" method="post">

		<?php
		include "koneksi.php";
		$nama_pasien = $_GET['nama_pasien'];
		$query = mysqli_query($koneksi, "SELECT * FROM rkmedis WHERE nama_pasien = '$nama_pasien'") or die(mysqli_error($koneksi));
		$data = mysqli_fetch_array($query);
		?>
		<table>
			<tr>
				<td></td>
				<td>
						<h3>Edit Rekam Medis</h3>
				</td>
			</tr>

			<tr>
				<td>Nama Pasien</td>
				<td><input type="text" name="nama_pasien" value="<?php echo $data['nama_pasien'] ?>" required></td>
			</tr>
			<tr>
				<td>Tanggal Kunjungan</td>
				<td><input type="date" name="tgl_kunjung" value="<?php echo $data['tgl_kunjung'] ?>" required></td>
			</tr>
			<tr>
				<td>Keluhan</td>
				<td><input type="text" name="keluhan" value="<?php echo $data['keluhan'] ?>" required></td>
			</tr>
			<tr>
				<td>Diagnosis</td>
				<td><input type="text" name="diagnosis" value="<?php echo $data['diagnosis'] ?>" required></td>
			</tr>
			<tr>
				<td>Terapi</td>
				<td><input type="text" name="terapi" value="<?php echo $data['terapi'] ?>" required></td>
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