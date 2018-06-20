<?php
	session_start();
  $error="";
	if(isset($_SESSION['member'])){
		header("Location: ../home.php");
	}
	else if (!empty($_POST)) {
		if (empty($_POST['username']) || empty($_POST['password'])) {
			$error = "Username or Password tidak valid";
			}
		else
			{
				// Membangun koneksi ke database
				require "koneksi.php";
				// Variabel username dan password
				$username=$_POST['username'];
				$password=$_POST['password'];
				// Mencegah MySQL injection 
				$username = stripslashes($username);
				$password = stripslashes($password);
				$username = mysqli_real_escape_string($conn, $username);
				$password = mysqli_real_escape_string($conn, $password);
				// SQL query untuk memeriksa apakah user terdapat di database?
				//$query = mysqli_query("select * from member where username='$username' AND password='".md5($password)."'", $connection);
				$query = mysqli_query($conn, "select username from member where username='$username' and password=md5('$password')");
				if ($query){
				// query berhasil dieksekusi
					$rows = mysqli_num_rows($query);
					if ($rows >= 1) {
						$_SESSION['member']=$username; // Membuat Sesi/session
						header("Location: ../home.php"); // Mengarahkan ke halaman profil
						exit();
						//echo "berhasil masuk";
					}	else {
							echo "<script>alert('Username atau Password salah')</script>" . mysqli_error($conn);
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
	<title>Log In</title>
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
					Sign In
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
					<input class="input100" type="text" name="username" placeholder="username or email">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="password" placeholder="password">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						Sign In
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
					<a href="signup.php" class="txt2 hov1">
						Sign Up
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