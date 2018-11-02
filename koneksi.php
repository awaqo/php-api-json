<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'php-api';
$koneksi = mysqli_connect($servername, $username, $password, $database);
 
if(mysqli_connect_errno()){
	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}
 ?>