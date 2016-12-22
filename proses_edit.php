<?php
if(isset($_POST['simpan'])){
	include('connection.php');
	$nim		= $_POST['nim'];
	$nama		= $_POST['nama'];
	$jeniskelamin	= $_POST['jeniskelamin'];
	$jurusan	= $_POST['jurusan'];
        $angkatan	= $_POST['angkatan'];
        $status 	= $_POST['status'];
        
	$query = mysqli_query($connection,"UPDATE data_mahasiswa SET nama='$nama', jeniskelamin='$jeniskelamin', jurusan='$jurusan', angkatan='$angkatan', status='$status' WHERE nim='$nim'");
	
	if($query){
		echo 'Data mahasiswa berhasil diupdate.';
		header('location:index.php');
	}else{
		echo 'Data mahasiswa gagal diupdate.';
		echo '<script>window.history.back()</script>';
	}
}else{
    echo '<script>window.history.back()</script>';
}
?>