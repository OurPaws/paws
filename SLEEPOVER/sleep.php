<?php 	
		include 'connection.php';
			if(!empty($_POST)) {
				$username = $_POST['username'];
				$date_in = $_POST['datein'];
				$time_in = $_POST['timein'];
				$date_out = $_POST['dateout'];
				$time_out = $_POST['timeout'];
				$pets = $_POST['jumlah'];
				var_dump($_POST);

				$dateTimeInStr = $date_in . " " . $time_in;
				$dateTimeIn = DateTime::createFromFormat("Y-m-d H:i", $dateTimeInStr);
				$dateTimeOutStr = $date_out . " " . $time_out;
				$dateTimeOut = DateTime::createFromFormat("Y-m-d H:i", $dateTimeOutStr);
				$waktu = $dateTimeOut->getTimestamp() - $dateTimeIn->getTimestamp();
				$harga = (int)(round($waktu/3600) * 5000);

				$query = "INSERT into bookhotel SET username='$username', cek_in='$date_in', wktu_cekin='$time_in', cek_out='$date_out', wktu_cekout='$time_out', waktu='$waktu', harga='$harga', pets='$pets'";
				mysqli_query($link,$query);
				header("location:sleep.php");
			}

 ?>
<!DOCTYPE HTML>
<html>
<head>
<title>OUR PAWS</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
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
						<li><a href="index.html" class="active">Home</a></li>
						<li><a class="scroll" href="#about">About</a></li>
						<li><a class="scroll" href="#services">Services</a></li>
						<li><a class="scroll" href="#gallery">Gallery</a></li>
						<li><a class="scroll" href="#contact" >Contact</a></li>
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
			          <h3>Sleepover</h3>
			<div class="col-md-6 about-left">
				<img src="images/sleep.png" alt="" class="img-responsive">
			</div>
			<div class="col-md-6 about-right">
				<h4>Hotel kucing</h4>
				<!-- <h5>Temporibus autem</h5> -->
				<p>Dalam sehari, bisa jadi kegiatan yang paling menyita waktu kucing adalah tidur. Kucing paling suka tidur dan bergelung dalam waktu yang lama. Namun jangan salah, kucing tidur bukan karena malas, tapi mereka butuh cadangan energi yang besar untuk menangkap mangsa atau bahaya yang mendekat. Jadi, jangan biarkan kesibukan anda mengganggu jadwal tidur si kucing ya.</p>			
			    <ul>
			    	<li><a data-toggle="modal" data-target="#bookSleepModal" href="#bookSleepModal"><span class="fts"></span>Book Now</a></li>
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
				<div class="col-md-3 footer-left">
					<h4>New Solutions</h4>
					<ul>
						<li><a href="#"><span class="pt-foot"> </span>Notare quam littera</a></li>
						<li><a href="#"><span class="pt-foot"> </span>Malesuada rhoncus congue</a></li>
						<li><a href="#"><span class="pt-foot"> </span>Suspendisse finibus purus</a></li>
						<li><a href="#"><span class="pt-foot"> </span>Malesuada orci purus</a></li>
						<li><a href="#"><span class="pt-foot"> </span>Quisque ullamcorper tellus</a></li>
					</ul>
				</div>
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
					<p>© 2016 Pets House. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
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
<div id="bookSleepModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content modal-white">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Sleepover Booking Widget</h4>
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
				<!-- <div class="agileits_main_grid w3_agileits_main_grid">
					<div class="wthree_grid">
						<h5>Room Type</h5>
						<select id="category" name="category" required="">
							<option value="none">None</option>
							<option value="category1">Single Room</option>
							<option value="category2">Double Room</option>
							<option value="category3">Suit Room</option>
							
						</select>
					</div>
				</div> -->
				<div class="agileits_w3layouts_main_grid w3ls_main_grid">
					<div class="agileinfo_grid">
					<h5>Check In & Time *</h5>
						
						<div class="agileits_w3layouts_main_gridl">
							<input class="date" id="datepicker" name="datein" type="date" value="yyyy:mm:dd" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '08/13/2016';}" required="">
						</div>
						<div class="agileits_w3layouts_main_gridr">
							<input type="time" name="timein" placeholder=" " required="">
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<div class="agileits_w3layouts_main_grid w3ls_main_grid">
					<div class="agileinfo_grid">
					<h5>Check Out & Time *</h5>
						
						<div class="agileits_w3layouts_main_gridl">
							<input class="date" id="datepicker1" name="dateout" type="date" value="yyyy:mm:dd" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '08/13/2016';}" required="">
						</div>
						<div class="agileits_w3layouts_main_gridr">
							<input type="time" name="timeout" placeholder=" " required="">
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<div class="agileinfo_main_grid">
					<div class="agileits_w3layouts_grid">
						<h5>Number of Pets *</h5>
						<select id="category1" name="jumlah" required="">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="">5</option>
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

