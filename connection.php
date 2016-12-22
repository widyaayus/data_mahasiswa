<?php
	$namahost = "localhost";
	$username = "root";
	$password = "";	//password MySQL anda
	$database = "data_mahasiswa"; //database anda
	$connection = mysqli_connect($namahost, $username, $password, $database) or die("Unable to connect.");
?>