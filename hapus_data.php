<?php
if(isset($_GET['nim'])){
	
	include('connection.php');
	$nim = $_GET['nim'];
	$query = mysql_query("SELECT nim FROM siswa WHERE nim='$nim'") or die(mysql_error());
	
        if(mysql_num_rows($query) == 0){
            echo '<script>window.history.back()</script>';
	}else{
            $query = mysql_query("DELETE FROM data_mahasiswa WHERE nim='$nim'");
		if($query){
			echo 'Data mahasiswa berhasil dihapus.';
		}else{
			echo 'Data mahasiswa gagal dihapus.';
		}	
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>