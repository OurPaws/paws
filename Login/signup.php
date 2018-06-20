<?php
session_start();

$error="";
if(isset($_SESSION['member'])){
	//header("location: home.php");
}

// fix: ganti isset($_POST['submit'])) -> !empty($_POST) dengan asumsi check request pakai method POST
else if (!empty($_POST)) {
	// Variabel
	$username=$_POST['username'];
	$password1=$_POST['password1'];
	$password2=$_POST['password2'];
	$email=$_POST['email'];
	$nama=$_POST['nama'];

	if($password1!=$password2){
		$error="Password tidak sama";
	}
	else{
		// Membangun koneksi ke database
		require "koneksi.php";
		// SQL query untuk memeriksa apakah user terdapat di database?
		//$query = mysql_query("select username from member where username='$username'", $connection);
		// fix: argumen 1 -> variabel koneksi, argumen 2 -> string kueri
		$query = mysqli_query($conn, "select username from member where username='$username'");
		// tambahan: check dulu apakah kueri berhasil atw gak?
		if ($query){
			// query berhasil dieksekusi
			$rows = mysqli_num_rows($query);
			if ($rows >= 1) {
				$error="Username telah terdaftar";
			}
			else
			{
				// Mencegah MySQL injection
				$username = stripslashes($username);
				$password1 = stripslashes($password1);
				$email = stripslashes($email);
				$nama = stripslashes($nama);
				// fix: mysqli harus pakai argumen 1 sbg variabel koneksi, argumen 2 sbg string kueri
				$username = mysqli_real_escape_string($conn, $username);
				$password1 = mysqli_real_escape_string($conn, $password1);
				$email = mysqli_real_escape_string($conn, $email);
				$nama = mysqli_real_escape_string($conn, $nama);
				// SQL query untuk memasukkan data ke database
				//mysql_query("insert into member(username,password,nama,email)  values('".$username."','".md5($password1)."','".$nama."','".$email."')", $connection);
				$qr_insert = mysqli_query($conn, "insert into member(username,password,nama,email)  values('".$username."','".md5($password1)."','".$nama."','".$email."')");
				// check apakah kueri 'insert' diatas berhasil dijalankan?
				if ($qr_insert){
					$_SESSION['member']=$username; // Membuat Sesi/session
					//header("HTTP/1.1 301 Moved Permanently"); 
					header("location: login.php");
					exit();
				} else {
					// gagal input? Liat errornya
					die("Gagal input registrasi: " . mysqli_error($conn));
				}
			}
		} else {
			// Gagal eksekusi kueri
			die('Gagal login: ' . mysqli_error($conn));
		}
		//mysql_close($connection); // Menutup koneksi
		mysqli_close($conn);
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign Up</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	
	<div class="container-login100" style="background-image: url('images/cing.jpeg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form" method="post">
				<span class="login100-form-title p-b-37">
					Sign Up
				</span>
				<p><?php if(isset($error)){echo $error;} ?></p>
				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter Name">
					<input class="input100" type="text" name="nama" placeholder="nama">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username">
					<input class="input100" type="text" name="username" placeholder="username">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter email">
					<input class="input100" type="text" name="email" placeholder="email">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="password1" placeholder="password">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter confirm password">
					<input class="input100" type="password" name="password2" placeholder="confirm password">
					<span class="focus-input100"></span>
				</div>
				<?php echo $error ?>
				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						Sign Up
					</button>
				</div>

				<div class="text-center p-t-57 p-b-20">
					<!-- <span class="txt1">
						Or login with
					</span> -->
				</div>

				<!-- <div class="flex-c p-b-112">
					<a href="#" class="login100-social-item">
						<i class="fa fa-facebook-f"></i>
					</a>

					<a href="#" class="login100-social-item">
						<img src="images/icons/icon-google.png" alt="GOOGLE">
					</a>
				</div> -->

				<div class="text-center">
					<a href="login.php" class="txt2 hov1">
						Sign In
					</a>
				</div>
			</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>