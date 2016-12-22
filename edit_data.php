<!DOCTYPE html>
<html>
<head>
	<title>Sistem Data Mahasiswa</title>
</head>
<body>
	<h2>Sistem Data Mahasiswa</h2>
	<h3>Edit Data Mahasiswa</h3>
	<?php
	include('connection.php');
	$nim = $_GET['nim'];
	$query = mysqli_query($connection,"SELECT * FROM data_mahasiswa WHERE nim='$nim'");
	if(mysqli_num_rows($query) == 0){
		echo '<script>window.history.back()</script>';
	}else{
		$data = mysqli_fetch_assoc($query);
	}
	?>
	
	<form action="proses_edit.php" method="post">
		<input type="hidden" name="nim" value="<?php echo $nim; ?>">
		<table cellpadding="5" cellspacing="0">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" size="20" value="<?php echo $data['nama']; ?>" required></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<select name="jeniskelamin" required
						<option value="Laki-Laki" <?php if($data['jeniskelamin'] == 'Laki-Laki'){ echo 'selected'; }?>>Laki-Laki</option>
						<option value="Perempuan" <?php if($data['jeniskelamin'] == 'Perempuan'){ echo 'selected'; }?>>Laki-Laki</option>
                                        </select>
				</td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td>:</td>
				<td>
					<select name="jurusan" required>
						<option value="Teknik Informatika" <?php if($data['jurusan'] == 'Teknik Informatika'){ echo 'selected'; }?>>Teknik Informatika</option>
						<option value="Sistem Informasi" <?php if($data['jurusan'] == 'Sistem Informasi'){ echo 'selected'; }?>>Sistem Informasi</option>
                                                <option value="Teknik Komputer" <?php if($data['jurusan'] == 'Teknik Komputer'){ echo 'selected'; }?>>Teknik Komputer</option>
                                                <option value="Teknologi Informasi" <?php if($data['jurusan'] == 'Teknologi Informasi'){ echo 'selected'; }?>>Teknologi Informasi</option>
                                                <option value="Magister Informatika" <?php if($data['jurusan'] == 'Magister Informatika'){ echo 'selected'; }?>>Magister Informatika</option>
                                        </select>
				</td>
			</tr>
			<tr>
				<td>Angkatan</td>
				<td>:</td>
				<td><input type="text" name="angkatan" size="4" value="<?php echo $data['angkatan']; ?>" required></td>
			</tr>
			<tr>
				<td>Status</td>
				<td>:</td>
				<td>
					<select name="status" required>
						<option value="Tidak Aktif" <?php if($data['status'] == 'Tidak Aktif'){ echo 'selected'; }?>>Tidak Aktif</option>
						<option value="Terdaftar" <?php if($data['status'] == 'Terdaftar'){ echo 'selected'; }?>>Terdaftar</option>
                                                <option value="Aktif" <?php if($data['status'] == 'Aktif'){ echo 'selected'; }?>>Aktif</option>
                                        </select>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
	</form>
        <p><a href="index.php">Kembali ke halaman utama.</a>
</body>
</html>