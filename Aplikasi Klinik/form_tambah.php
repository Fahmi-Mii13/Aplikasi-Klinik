<!DOCTYPE html>
<html>

<head>
	<title>Tambah Pasien | Web Klinik 08</title>
	<link rel="stylesheet" href="css/form.css">
</head>

<body>
	<div class="judul">
		<h2>Tambah Pasien</h2>
	</div>

	<center>
		<br />
		<a href="pasien.php">
			<button>
				< Lihat Semua Data</button>
		</a>
	</center>


	<form action="proses_tambah.php" method="post">
		<table>
			<tr>
				<td></td>
				<td>
					<h3>Tambah Pasien</h3>
				</td>
			</tr>
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
