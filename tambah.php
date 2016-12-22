<!DOCTYPE html>
<html>
<head>
	<title>Sistem Data Mahasiswa</title>
</head>
<body>
	<h2>Sistem Data Mahasiswa</h2>
	<h3>Tambah Data Mahasiswa</h3>
	<form action="tambah-proses.php" method="post">
		<table cellpadding="5" cellspacing="0">
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim" size="15" required></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" size="20" required></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<select name="jeniskelamin" required>
						<option value="Laki-Laki">Laki-Laki</option>
						<option value="Perempuan">Perempuan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td>:</td>
				<td>
					<select name="jurusan" required>
						<option value="Teknik Informatika">Teknik Informatika</option>
						<option value="Sistem Informasi">Sistem Informasi</option>
						<option value="Teknik Komputer">Teknik Komputer</option>
						<option value="Teknologi Informasi">Teknologi Informasi</option>
						<option value="Magister Informatika">Magister Informatika</option>
					</select>
				</td>
			</tr>
                        <tr>
				<td>Angkatan</td>
                                <td>:</td>
                                <td><input type="text" name="angkatan" size="4" required></td>
			</tr>
                        <tr>
				<td>Status</td>
				<td>:</td>
				<td>
					<select name="status" required>
						<option value="Tidak Aktif">Tidak Aktif</option>
						<option value="Terdaftar">Terdaftar</option>
						<option value="Aktif">Aktif</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
		</table>
	</form>
        <p><a href="index.php">Kembali ke halaman utama.</a></p>
</body>
</html>