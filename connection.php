<?php
	$namahost = "localhost";
	$username = "root";
	$password = "";	//password MySQL anda
	$database = "data_mahasiswa"; //database anda
	mysql_connect($namahost,$username,$password) or die("Failed");
	mysql_select_db($database) or die("Database not exist");
?>