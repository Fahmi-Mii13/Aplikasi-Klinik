<!DOCTYPE html>
<html>

<head>
	<title>Tambah Rekam Medis | Web Klinik 08</title>
	<link rel="stylesheet" href="css/form.css">
</head>

<body>
	<div class="judul">
		<h2>Tambah Rekam Medis</h2>
	</div>

	<center>
		<br />
		<a href="rmedis.php">
			<button>
				< Lihat Semua Data</button>
		</a>
	</center>


	<form action="proses_tambah_rek.php" method="post">

		<?php
		include "koneksi.php";
		$query = "SELECT nama_pasien FROM pasien";
		$query2 = "SELECT nama_dokter FROM dokter";
		$result = $koneksi->query($query);
		$result2 = $koneksi->query($query2);
		?>
		<table>
			<tr>
				<td colspan="2">
					<center>
						<h3>Tambah Rekam Medis</h3>
					</center>
				</td>
			</tr>

			<tr>
			<tr>
				<td>No Rekam</td>
				<td><input type="text" name="no_rek" required></td>
			</tr>
			<td>Nama Pasien</td>
			<td>
				<select name="nama_pasien" class="selectt" required>
					<option value="">Pilih Nama Pasien</option>
					<?php
					if ($result->num_rows > 0) {
						while ($row = $result->fetch_assoc()) {
							echo "<option value='" . $row['nama_pasien'] . "' $selected>" . htmlspecialchars($row['nama_pasien']) . "</option>";
						}
					} else {
						echo "<option value=''>Tidak ada data pasien</option>";
					}
					?>
				</select>
			</td>
			</tr>
			<tr>
				<td>Tanggal Kunjungan</td>
				<td><input type="date" name="tgl_kunjung" class="selectt" required></td>
			</tr>
			<tr>
				<td>Nama Dokter</td>
				<td>
					<select name="nama_dokter" class="selectt" required>
						<option value="">Pilih Nama Dokter</option>
						<?php
						if ($result2->num_rows > 0) {
							while ($row = $result2->fetch_assoc()) {
								echo "<option value='" . $row['nama_dokter'] . "' $selected>" . htmlspecialchars($row['nama_dokter']) . "</option>";
							}
						} else {
							echo "<option value=''>Tidak ada data Dokter</option>";
						}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Keluhan</td>
				<td><input type="text" name="keluhan" required></td>
			</tr>
			<tr>
				<td>Diagnosis</td>
				<td><input type="text" name="diagnosis" required></td>
			</tr>
			<tr>
				<td>Terapi</td>
				<td><input type="text" name="terapi" required></td>
			</tr>
			<td></td>
			<td><button type="submit">Simpan</button></td>
			</tr>
		</table>
	</form>
</body>

</html>