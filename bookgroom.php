<?php 	
		include 'connection.php';
 ?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>OUR PAWS</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Classy Hotel Booking Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- js -->
<script src="js/jquery-2.1.3.min.js" type="text/javascript"></script>
<!-- //js -->
<link href="css/style3.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
</head>

<!-- <style>
	html, body{
    /*font-size: 100%;*/
     background: url(../images/awalgr.png) no-repeat 0px 0px;
    /*background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
 
	font-family: 'Poppins', sans-serif;*/
}
</style> -->
<body>
	<div class="main">
		<h1 class="w3layouts_head">Grooming Booking Widget</h1>
		<div class="w3layouts_main_grid">
			<form action="#" method="post" class="w3_form_post">
				<div class="w3_agileits_main_grid w3l_main_grid">
					<div class="agileits_grid">

						<!-- <h5>Name * </h5>
						<div class="nam">
							<input type="text" name="First name" placeholder="First Name" required="">
						</div>
						<div class="nam1">
							<input type="text" name="Last name" placeholder="Last Name" required="">
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="w3_agileits_main_grid w3l_main_grid">
					<div class="agileits_grid">
						<h5>E-mail </h5>
							<input type="email" name="Email" placeholder="ex : myname@gmail.com" required="">
					</div>
				</div> -->
				<div class="agileits_main_grid w3_agileits_main_grid">
					<div class="wthree_grid">
						<h5>Grooming Type</h5>
						<select id="category" name="category" required="">
							 <?php 

								 $tipe = "select * FROM grooming";
								 $data = mysqli_query($link,$tipe);
								 // mysql_select_db(database_name)
								 // $pilih = mysql_select_db("paws",$connection);	

								 while($row=mysqli_fetch_array($data)){
								       $nomor = $row["no_urut"];
                                       $jenis = $row['jns_grooming'];
                                       $harga = $row["hrg_grooming"];
                                   echo "<option value=\"$jns_grooming|$hrg_grooming\">".$jenis."</option>";
                                     // echo "<option value=\"$id_namamenu|$harga\">" .$Nama_Menu."</option>";
                               }
							 ?> 

							<!-- <option value="none">None</option>
							<option value="category1">Single Room</option>
							<option value="category2">Double Room</option>
							<option value="category3">Suit Room</option>
							 -->
						</select>
					</div>
				</div>
				<div class="agileits_w3layouts_main_grid w3ls_main_grid">
					<div class="agileinfo_grid">
					<h5>Check In & Time *</h5>
						
						<div class="agileits_w3layouts_main_gridl">
							<input class="date" id="datepicker" name="Text" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '08/13/2016';}" required="">
						</div>
						<div class="agileits_w3layouts_main_gridr">
							<input type="time" name="Time" placeholder=" " required="">
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<!-- <div class="agileits_w3layouts_main_grid w3ls_main_grid">
					<div class="agileinfo_grid">
					<h5>Check Out & Time *</h5>
						
						<div class="agileits_w3layouts_main_gridl">
							<input class="date" id="datepicker1" name="Text" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '08/13/2016';}" required="">
						</div>
						<div class="agileits_w3layouts_main_gridr">
							<input type="time" name="Time" placeholder=" " required="">
						</div>
						<div class="clear"> </div>
					</div>
				</div> -->
				<div class="agileinfo_main_grid">
					<div class="agileits_w3layouts_grid">
						<h5>Number of Pets *</h5>
						<select id="category1" name="category1" required="">
							<option value="category1">1</option>
							<option value="category2">2</option>
							<option value="category3">3</option>
							<option value="category4">4</option>
							<option value="category5">5</option>
						</select>
					</div>
				</div>
				
				
				<div class="w3_main_grid">
					
					<div class="w3_main_grid_right">
						<input type="submit" value="Book Now">
					</div>
					<div class="clear">
					 </div>
				</div>
			</form>
		</div>
		<!-- Calendar -->
			<link rel="stylesheet" href="css/jquery-ui.css" />
			<script src="js/jquery-ui.js"></script>
			  <script>
					  $(function() {
						$( "#datepicker,#datepicker1" ).datepicker();
					  });
			  </script>
		<!-- //Calendar -->
		<div class="agileits_copyright">
			<p>All rights reserved | Design by OUR PAWS</a></p>
		</div>
	</div>
</body>
</html>