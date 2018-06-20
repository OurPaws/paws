<?php 	
								include 'connection.php';
								if(!empty($_POST)) {
									$username = $_POST['username'];
									$jenis = $_POST['kategori'];
									$jenis_spl = explode('|', $jenis);
									$nama_jenis = $jenis_spl[0];
									$harga = $jenis_spl[1];
									$date = $_POST['date'];
									$time = $_POST['time'];
									$pets = $_POST['jumlah'];

									$query = "INSERT into bookgrooming SET username='$username', jns_grooming='$nama_jenis', harga='$harga', date='$date', time='$time', pets='$pets'";
									mysqli_query($link,$query);
									header("location:grooming.php");
								}
								


							 ?>

<!DOCTYPE HTML>
<html>
<head>
<title>OUR PAWS</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- //js -->
<link href="css/style3.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" type="text/css" href="css/style1.css" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pets House Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Rambla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
<!-- //end-smoth-scrolling -->
<script type="text/javascript" src="js/modernizr.custom.js"></script> 
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script src="js/bootstrap.min.js"></script>

</head>
<body>
<!--banner strat here-->
<div class="banner">
	<div class="container">
		<div class="banner-main">
			<div class="banner-text">
				<a href="index.html"><div class="logo">
					<h1>OUR PAWS</h1>
					<p>The Best Home for Your Cats</p>
				</div></a>			 
			</div>
			<h3>On the other hand, we denounce with righteous indignation and dislike and trouble that are bound to ensue blame.</h3>
		</div>
	</div>
</div>
<!--baner end here-->
<!--header start here-->
<div class="header-bottom">
  <div class="fixed-header">	
	<div class="container">
		<div class="header-main">
			<div class="header-left">
				<h2><a href="index.html">Services</a></h2>
			</div>
			<div class="header-right">					
				  <div class="top-nav">
					<span class="menu"><img src="images/menu.png" alt=""/></span>
					<ul class="nav1">
						<li><a href="../home.php" class="active">Home</a></li>
						<li><a class="scroll" href="#about">About</a></li>
						<li><a class="scroll" href="#services">Services</a></li>
						<li><a class="scroll" href="#gallery">Gallery</a></li>
						<li><a class="scroll" href="#contact" >Contact</a></li>
						<li><a href="../keluar.php">Log Out</a></li>'
					</ul>	
					<!-- script-for-menu -->
					 <script>
					   $( "span.menu" ).click(function() {
						 $( "ul.nav1" ).slideToggle( 300, function() {
						 // Animation complete.
						  });
						 });
					</script>
					<!-- /script-for-menu -->
					<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-bottom").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-bottom").addClass("fixed");
				}else{
					$(".header-bottom").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
				</div>
			 </div>
			</div>
		  <div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--header end here-->
<div class="about" id="about">
	<div class="container">
		<div class="about-main">
			          <h3>Grooming</h3>
			<div class="col-md-6 about-left">
				<img src="images/awalgr.png" alt="" class="img-responsive">
			</div>
			<div class="col-md-6 about-right">
				<h4>'Grooming' atau berdandan</h4>
				<!-- <h5>Temporibus autem</h5> -->
				<p>Walaupun kucing-kucing mengandalkan lidah untuk tetap bersih dan cantik, mereka juga mmebutuhkan grooming yang dibantu oleh profesional. Fungsi grooming itu sendiri adalah melatih kucing untuk terbiasa dengan sentuhan tangan manusia. Selain itu grooming juga dapat membantu pemilik untuk mengikuti perkembangan si kucing. Dengan grooming ini, kucing dapat diberi perhatian khusus yang tidak ia dapatkan di rumahnya.</p>			
			    <ul>
			    	<li><a data-toggle="modal" data-target="#bookGroomModal" href="#bookGroomModal"><span class="fts"></span>Reservation Now</a></li>
			  <!--   	<li><a href="#"><span class="brh"></span>Brush</a></li> -->
			    	<!-- <li><a href="#"> <span class="feed"> </span>Feed </a></li> -->
			    </ul>
			</div>
		  <div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--About text end here-->




<!--footer strat here-->
<div class="footer">
		<div class="container">
			<div class="footer-main">
				<!-- <div class="col-md-3 footer-left">
					<h4>Useful Links</h4>
					<ul>
						<li><a href="#"><span class="pt-foot"> </span>Mirum est notare quam</a></li>
						<li><a href="#"><span class="pt-foot"> </span>Nunc malesuada rhoncus</a></li>
						<li><a href="#"><span class="pt-foot"> </span>Suspendisse purus orci</a></li>
						<li><a href="#"><span class="pt-foot"> </span>Proin malesuada orci puru</a></li>
						<li><a href="#"><span class="pt-foot"> </span>Quisque ullamcorper ut</a></li>
					</ul>
				</div> -->
				<div class="col-md-3 footer-left">
					<h4>Information</h4>
					<ul>
						<li><a class="scroll" href="index.html"><span class="pt-foot"> </span>Home</a></li>
						<li><a class="scroll" href="#about"><span class="pt-foot"> </span>About</a></li>
						<li><a class="scroll" href="#services"><span class="pt-foot"> </span>Services</a></li>
						<li><a class="scroll" href="#gallery"><span class="pt-foot"> </span>Gallery</a></li>
						<li><a class="scroll" href="#contact"><span class="pt-foot"> </span>Contact</a></li>
					</ul>
				</div>
				<!-- <div class="col-md-3 footer-left">
					<h4>New Solutions</h4>
					<ul>
						<li><a href="#"><span class="pt-foot"> </span>Notare quam littera</a></li>
						<li><a href="#"><span class="pt-foot"> </span>Malesuada rhoncus congue</a></li>
						<li><a href="#"><span class="pt-foot"> </span>Suspendisse finibus purus</a></li>
						<li><a href="#"><span class="pt-foot"> </span>Malesuada orci purus</a></li>
						<li><a href="#"><span class="pt-foot"> </span>Quisque ullamcorper tellus</a></li>
					</ul>
				</div> -->
				<!-- <div class="col-md-3 footer-left">
					<h4>Flickr Posts</h4>
					<div class="flickr">
						<div class="f-one">
							<div class="f-left">
								<a href="single.html"><img src="images/f3.jpg" alt="" /></a>
							</div>
							<div class="f-left">
								<a href="single.html"><img src="images/f4.jpg" alt="" /></a>
							</div>
							<div class="f-left">
								<a href="single.html"><img src="images/f5.jpg" alt="" /></a>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="f-one">
							<div class="f-left">
								<a href="single.html"><img src="images/f2.jpg" alt="" /></a>
							</div>
							<div class="f-left">
								<a href="single.html"><img src="images/f1.jpg" alt="" /></a>
							</div>
							<div class="f-left">
								<a href="single.html"><img src="images/f6.jpg" alt="" /></a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div> -->
				<div class="clearfix"> </div>
			</div>
			<div class="footer-text">			
				<div class="ft-right">
					<p>© 2018 Our Paws</p>
					<p>created by Amel & Malaq</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<script type="text/javascript">
										$(document).ready(function() {
											/*
											var defaults = {
									  			containerID: 'toTop', // fading element id
												containerHoverID: 'toTopHover', // fading element hover id
												scrollSpeed: 1200,
												easingType: 'linear' 
									 		};
											*/
											
											$().UItoTop({ easingType: 'easeOutQuart' });
											
										});
									</script>
						<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</div>

<!-- Modal -->
<div id="bookGroomModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content modal-white">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Grooming Booking Widget</h4>
      </div>
      <div class="modal-body">
        
      	<div>
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
							<select id="category" placeholder="Select one" name="kategori" required="">
							 <?php 
								

								 $tipe = "select * FROM grooming";
								 $data = mysqli_query($link,$tipe);
								 // mysql_select_db(database_name)
								 // $pilih = mysql_select_db("paws",$connection);	

								 while($row=mysqli_fetch_array($data)){
								       $nomor = $row["no_urut"];
                                       $jenis = $row['jns_grooming'];
                                       $harga = $row["hrg_grooming"];
                                   echo "<option value=\"$jenis|$harga\">$jenis | Rp $harga</option>";
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
							<input class="date" id="datepicker" name="date" type="date" value="yyyy:mm:dd" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '08/13/2016';}" required="">
						</div>
						<div class="agileits_w3layouts_main_gridr">
							<input type="time" name="time" placeholder=" " required="">
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
						<select id="category1" name="jumlah" required="">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
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

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


</body>
</html>

