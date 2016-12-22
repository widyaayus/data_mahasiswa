<?php
if(isset($_GET['nim'])){
	
	include('connection.php');
	$nim = $_GET['nim'];
	$query = mysqli_query($connection,"SELECT nim FROM data_mahasiswa WHERE nim='$nim'");
	
        if(mysqli_num_rows($query) == 0){
            echo '<script>window.history.back()</script>';
	}else{
            $query = mysqli_query($connection,"DELETE FROM data_mahasiswa WHERE nim='$nim'");
		if($query){
			echo 'Data mahasiswa berhasil dihapus.';
                        header("location:index.php");
		}else{
			echo 'Data mahasiswa gagal dihapus.';
                        echo '<script>window.history.back()</script>';
		}	
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>