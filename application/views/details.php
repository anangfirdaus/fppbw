<!DOCTYPE HTML>
<html> 
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Shop &mdash; Free Website Template, Free HTML5 Template by gettemplates.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="gettemplates.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i" rel="stylesheet"> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url();?>css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/flexslider.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/style.css">

	<!-- Modernizr JS -->
	<script src="<?php echo base_url();?>js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-xs-2">
					<div id="fh5co-logo"><a href="index.html">TVSTORE</a></div>
				</div>
				<div class="col-md-6 col-xs-6 text-center menu-1">
					<img src="<?php echo base_url()?>gambar/logo.jpg" height=50px width=50px>
				</div>
			</div>
			
		</div>
	</nav>
	<div id="fh5co-started">
		<div class="container">
			<div class="about-content">
				<div class="row animate-box">
					<div class="col-md-6">
						<div class="desc">
							<h3><?php echo $sepatu['nama_barang'] ?></h3>
							<h3><?php echo $sepatu['harga'] ?></h3>
						</div>
						<div class="desc">
							<h3><?php echo $sepatu['keterangan'] ?></h3>
						</div>
					</div>
					<div class="col-md-6">
						<img class="img-responsive" src="<?php echo base_url().$sepatu['image'] ?>" >
					</div>
				</div>
				<a href="<?php echo base_url().'crud/viewformpemesanan/'.$sepatu['id'] ?>"><button class="btn btn-primary">Pesan</button></a>
			</div>
		</div>
	</div>

	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; Anang 2017.</small> 
						<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://blog.gessato.com/" target="_blank">Gessato</a> &amp; <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="<?php echo base_url();?>js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url();?>js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url();?>js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="<?php echo base_url();?>js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="<?php echo base_url();?>js/jquery.countTo.js"></script>
	<!-- Flexslider -->
	<script src="<?php echo base_url();?>js/jquery.flexslider-min.js"></script>
	<!-- Main -->
	<script src="<?php echo base_url();?>js/main.js"></script>

	</body>
</html>

