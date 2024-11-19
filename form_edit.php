<!DOCTYPE html>
<html>

<head>
	<title>Edit Pasien | Web Klinik 08</title>
	<link rel="stylesheet" href="css/form.css">
</head>

<body>
	<div class="judul">
		<h2>Edit Pasien</h2>
	</div>

	<center>
		<br />
		<a href="pasien.php">
			<button>
				< Lihat Semua Data</button>
		</a>
	</center>


	<form action="proses_edit.php" method="post">

		<?php
		include "koneksi.php";
		$nama_pasien = $_GET['nama_pasien'];
		$query = mysqli_query($koneksi, "SELECT * FROM pasien WHERE nama_pasien = '$nama_pasien'") or die(mysqli_error($koneksi));
		$data = mysqli_fetch_array($query);
		?>
		<table>
			<tr>
				<td colspan="2">
					<center>
						<h3>Edit Pasien</h3>
					</center>
				</td>
			</tr>
			<tr>
				<td>Nama Pasien</td>
				<td><input type="text" name="nama_pasien" value="<?php echo $data['nama_pasien'] ?>" required></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" value="<?php echo $data['username'] ?>" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password" value="<?php echo $data['password'] ?>" required></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="radio" name="jk" value="Laki-laki" required>
					<label for="jk">Laki-laki</label><br>
					<input type="radio" name="jk" value="Perempuan" required>
					<label for="jk">Perempuan</label><br>
				</td>
			</tr>
			<tr>
				<td>Umur</td>
				<td><input type="text" name="umur" value="<?php echo $data['umur'] ?>" required></td>
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