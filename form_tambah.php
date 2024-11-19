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
				<td colspan="2">
					<center>
						<h3>Tambah Pasien</h3>
					</center>
				</td>
			</tr>
			<tr>
				<td>Nama Pasien</td>
				<td><input type="text" name="nama_pasien" required></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password" required></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="radio" name="jk" value="Laki-laki" required>
					<label for="alamat">Laki-laki</label><br>
					<input type="radio" name="jk" value="Perempuan" required>
					<label for="alamat">Perempuan</label><br>
				</td>
			</tr>

			<tr>
				<td>Umur</td>
				<td><input type="text" name="umur" required></td>
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