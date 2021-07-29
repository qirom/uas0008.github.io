<?php

$server 	= "localhost";
$username	= "root";
$pass		= "";
$db 		= "192300008"; 
$koneksi = mysqli_connect($server, $username, $pass, $db); 

if(mysqli_connect_errno()) {
	echo "Koneksi gagal : ".mysqli_connect_error();
}