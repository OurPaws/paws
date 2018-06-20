<?php
//File koneksi ke database
$hostServer="localhost";
$usernameServer="root";
$passwordServer="";
$databaseServer="paws";

//Koneksi ke host
//$connection = mysql_connect($hostServer,$usernameServer,$passwordServer) or die("Maaf, Server Mati");
$conn = mysqli_connect($hostServer, $usernameServer, $passwordServer, $databaseServer);

// gak perlu kalo pake mysqli
//Select database
//$db = mysql_select_db($databaseServer, $connection) or die("Database tidak ada");

?>
