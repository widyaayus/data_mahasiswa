<?php
if(isset($_POST['tambah'])){
	
        include('connection.php');
	$nim		= $_POST['nim'];
	$nama		= $_POST['nama'];
	$jeniskelamin	= $_POST['jeniskelamin'];
	$jurusan	= $_POST['jurusan'];
	$angkatan	= $_POST['angkatan'];
        $status 	= $_POST['status'];
	
	$query = mysql_query("INSERT INTO data_mahasiswa VALUES('$nim', '$nama', '$jeniskelamin', '$jurusan', '$angkatan', '$status')") or die(mysql_error());
	
	if($query){
		echo 'Data mahasiswa berhasil ditambahkan.';
		echo '<a href="tambah.php">Kembali ke halaman tambah data mahasiswa.</a>';		
	}else{
		echo 'Data mahasiswa gagal ditambahkan. ';
                echo '<a href="tambah.php">Kembali ke halaman tambah data mahasiswa.</a>';				
	}
}else{
    echo '<script>window.history.back()</script>';
}
?>