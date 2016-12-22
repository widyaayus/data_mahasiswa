<?php
if(isset($_POST['simpan'])){
	include('connection.php');
	$nim		= $_POST['nim'];
	$nama		= $_POST['nama'];
	$jeniskelamin	= $_POST['jeniskelamin'];
	$jurusan	= $_POST['jurusan'];
        $angkatan	= $_POST['angkatan'];
        $status 	= $_POST['status'];
        
	$query = mysql_query("UPDATE data_mahasiswa SET nama='$nama', jeniskelamin='$jeniskelamin', jurusan='$jurusan', angkatan='$angkatan', status='$status' WHERE nim='$nim'") or die(mysql_error());
	
	if($query){
		echo 'Data mahasiswa berhasil diupdate.';
	}else{
		echo 'Data mahasiswa gagal diupdate.';
	}
}else{
    echo '<script>window.history.back()</script>';
}
?>