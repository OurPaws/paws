<?php
// Memulai Session
session_start();
if(!isset($_SESSION['member'])){
	header('Location: masuk.php');
}
else{
	// Membangun Koneksi dengan Server dengan nama server, username dan password sebagai parameter
	include "koneksi.php";
	// user cek
	$userCheck = $_SESSION['member'];
	// Ambil username dengan mysql_fetch_assoc
	$ses_sql=mysql_query("select * from member where username='$userCheck'", $connection);
	$userOnSession = mysql_fetch_assoc($ses_sql);
}
?>
