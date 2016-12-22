<!DOCTYPE html>
<html>
<head>
	<title>Sistem Data Mahasiswa</title>
</head>
<body>
	<h2>Sistem Data Mahasiswa</h2>
	
	<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	
	<h3>Data Mahasiswa</h3>
	
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<th>No.</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Jurusan</th>
			<th>Fakultas</th>
                        <th>Angkatan</th>
                        <th>Status</th>
		</tr>
		
		<?php
		//iNclude file koneksi ke database
		include('connection.php');
		
		//query ke database dg SELECT table DATA_MAHAsiswa diurutkan berdasarkan NIM 
		$query = mysql_query("SELECT * FROM data_mahasiswa ORDER BY nim ASC") or die(mysql_error());
		
		//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
		if(mysql_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong
			
			//jika data kosong, maka akan menampilkan row kosong
			echo '<tr><td colspan="6">Tidak ada data.</td></tr>';
			
		}else{	//else ini artinya jika data hasil query ada (data diu database tidak kosong)
			
			//jika data tidak kosong, maka akan melakukan perulangan while
			$no = 1;	//membuat variabel $no untuk membuat nomor urut
			while($data = mysql_fetch_assoc($query)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database
				
				//menampilkan row dengan data di database
				echo '<tr>';
					echo '<td>'.$no.'</td>';	//menampilkan nomor urut
					echo '<td>'.$data['nim'].'</td>';	//menampilkan data nim dari database
					echo '<td>'.$data['nama'].'</td>';	//menampilkan data nama dari database
					echo '<td>'.$data['jeniskelamin'].'</td>';	//menampilkan data jeniskelamin dari database
					echo '<td>'.$data['jurusan'].'</td>';	//menampilkan data jurusan dari database
                                        echo '<td>'.$data['fakultas'].'</td>';	//menampilkan data fakultas dari database
                                        echo '<td>'.$data['angkatan'].'</td>';	//menampilkan data angkatan dari database
                                        echo '<td>'.$data['status'].'</td>';	//menampilkan data status dari database
					echo '<td><a href="edit.php?id='.$data['nim'].'">Edit</a> / <a href="hapus.php?id='.$data['nim'].'" onclick="return confirm(\'Hapus data mahasiswa ini?\')">Hapus</a></td>';	//menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=siswa_id
				echo '</tr>';
				
				$no++;	//menambah jumlah nomor urut setiap row
				
			}
			
		}
		?>
	</table>
</body>
</html>