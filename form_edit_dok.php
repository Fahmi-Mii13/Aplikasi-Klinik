<!DOCTYPE html>
<html>

<head>
	<title>Edit Dokter | Web Klinik 08</title>
	<link rel="stylesheet" href="css/form.css">
</head>

<body>
	<div class="judul">
		<h2>Edit Dokter</h2>
	</div>

	<center>
		<br />
		<a href="dokter.php">
			<button>
				< Lihat Semua Data</button>
		</a>
	</center>


	<form action="proses_edit_dok.php" method="post">

		<?php
		include "koneksi.php";
		$no_dokter = $_GET['no_dokter'];
		$query = mysqli_query($koneksi, "SELECT * FROM dokter WHERE no_dokter = '$no_dokter'") or die(mysqli_error($koneksi));
		$data = mysqli_fetch_array($query);
		?>
		<table>
			<tr>
				<td colspan="2">
					<center>
						<h3>Edit Dokter</h3>
					</center>
				</td>
			</tr>

			<tr>
				<td>No Dokter</td>
				<td><input type="text" name="no_dokter" value="<?php echo $data['no_dokter'] ?>" required></td>
			</tr>
			<tr>
				<td>Nama Dokter</td>
				<td><input type="text" name="nama_dokter" value="<?php echo $data['nama_dokter'] ?>" required></td>
			</tr>
			<tr>
				<td>Spesialis</td>
				<td><input type="text" name="spesialis" value="<?php echo $data['spesialis'] ?>" required></td>
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