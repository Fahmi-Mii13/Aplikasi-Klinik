<!DOCTYPE html>
<html>

<head>
	<title>Tambah Kendaraan | Web Pendataan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="judul">
		<h2></h2>Form tambah pasien</h2>
	</div>

	<br />
	<a href="pasien.php">
		<button>
			< Lihat Semua Data</button>
	</a>

	<h3>Input Pasien Baru</h3>
	<form action="proses_tambah.php" method="post">
		<table>
			<tr>
				<td>No Pasien</td>
				<td><input type="text" name="no_pasien" required></td>
			</tr>
			<tr>
				<td>Nama Pasien</td>
				<td><input type="text" name="nama_pasien" required></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="text" name="jk" required></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" required></td>
			</tr>
			<tr>
				<td>No Telp</td>
				<td><input type="text" name="no_telp" required></td>
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