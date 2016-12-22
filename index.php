<!DOCTYPE html>
<html>
<head>
	<title>Sistem Data Mahasiswa</title>
</head>
<body>
	<h2>Sistem Data Mahasiswa</h2>
	
	<a href="tambah.php">Tambah Data Mahasiswa</a></p>
	
	<h3>Data Mahasiswa</h3>
	
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<th>No.</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Jurusan</th>
            <th>Angkatan</th>
            <th>Status</th>
			<th></th>
		</tr>
		
		<?php
		//include file connection.php
		include('connection.php');
		
		//query S 
		$query = mysqli_query($connection, "SELECT * FROM data_mahasiswa ORDER BY nim ASC");
		
		//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
		if(mysqli_num_rows($query) == 0){	//jika hasil query kosong
			
			echo '<tr><td colspan="8">Tidak ada data.</td></tr>'; //menampilkan 'Tidak ada data.'
			
		}else{	//jika hasil query tidak kosong
		
			$no = 1;	//variabel untuk nomor urut
			while($data = mysqli_fetch_assoc($query)){	//perulangan sebanyak data yang didapatkan
				
				echo '<tr>';
					echo '<td>'.$no.'</td>';	//menampilkan nomor urut
					echo '<td>'.$data['nim'].'</td>';	//menampilkan data nim dari database
					echo '<td>'.$data['nama'].'</td>';	//menampilkan data nama dari database
					echo '<td>'.$data['jeniskelamin'].'</td>';	//menampilkan data jeniskelamin dari database
					echo '<td>'.$data['jurusan'].'</td>';	//menampilkan data jurusan dari database
                    echo '<td>'.$data['angkatan'].'</td>';	//menampilkan data angkatan dari database
                    echo '<td>'.$data['status'].'</td>';	//menampilkan data status dari database
					echo '<td><a href="edit_data.php?nim='.$data['nim'].'">Edit</a> / <a href="hapus_data.php?nim='.$data['nim'].'" onclick="return confirm(\'Hapus data mahasiswa ini?\')">Hapus</a></td>';	//fitur edit dan hapus
				echo '</tr>';
				
				$no++;	//increment nomor urut pada tampilan tabel
				
			}
			
		}
		?>
	</table>
</body>
</html>