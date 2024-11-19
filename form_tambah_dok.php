<!DOCTYPE html>
<html>

<head>
	<title>Tambah Dokter | Web Klinik 08</title>
	<link rel="stylesheet" href="css/form.css">
</head>

<body>
	<div class="judul">
		<h2>Tambah Dokter</h2>
	</div>

	<center>
		<br />
		<a href="dokter.php">
			<button>
				< Lihat Semua Data</button>
		</a>
	</center>


	<form action="proses_tambah_dok.php" method="post">
		<table>
			<tr>
				<td colspan="2">
					<center>
						<h3>Tambah Dokter</h3>
					</center>
				</td>
			</tr>
			<tr>
				<td>No Dokter</td>
				<td><input type="text" name="no_dokter" required></td>
			</tr>
			<tr>
				<td>Nama Dokter</td>
				<td><input type="text" name="nama_dokter" required></td>
			</tr>
			<tr>
				<td>Spesialis</td>
				<td><input type="text" name="spesialis" required></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" required>
				</td>
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