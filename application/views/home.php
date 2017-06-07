<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>TVSTORE DISKON SNEAKER SETIAP HARI</title>
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
				<div class="col-md-3 col-xs-4 text-right hidden-xs menu-2">
					<ul>
						<li class="search">
							<div class="input-group">
								<form method="POST" action="<?php echo site_url("crud/search_keyword")?>">
		                        <input type="text" placeholder="Search.." name="keyword">
						      <span class="input-group-btn">
						        <button class="btn btn-primary" type="button"><i class="icon-search"></i></button>
						      </span>
		                        </form>
						      
						    </div>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>
	
	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(<?php echo base_url()?>gambar/slider1.jpg);">
		   	</li>
		   	<li style="background-image: url(<?php echo base_url()?>gambar/slider2.jpg);">
		   	</li>
		   	<li style="background-image: url(<?php echo base_url()?>gambar/slider3.jpg);">
		  	</ul>
	  	</div>
	</aside>

	<div id="fh5co-services" class="fh5co-bg-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-4 text-center">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-wallet"></i>
						</span>
						<h3>Harga Terjangkau</h3>
						<p>Harga lebih murah dari pada beli di mall</p>
					</div>
				</div>
				<div class="col-md-6 col-sm-4 text-center">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-paper-plane"></i>
						</span>
						<h3>Free Ongkir</h3>
						<p>Dapatkan ongkos kirim gratis pada barang tertentu</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="fh5co-product">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Stuff</h2>
				</div>
<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center">
				<form method="POST" action="<?php echo base_url()."crud/filter"; ?>">
					<h4>adidas<input type="checkbox" name="adidas" value="adidas">         nike<input type="checkbox" name="nike" value="nike"></h4>
					<!-- <a href="<?php echo site_url("crud/viewadidas")?>"><button>adidas</button></a>
					<a href="<?php echo site_url("crud/viewnike")?>"><button>nike</button></a> -->
					<input class="btn btn-primary" type="submit" value="filter">
				</form>
				</div>
			</div>
			</div>
			<div id="produk" class="row">
				<?php foreach ($data as $d){ ?>
				<a href="<?php echo base_url()."index.php/crud/viewdetails/".$d['id']; ?>">
				<div class="col-md-4 text-center animate-box">
					<div class="product">
						<div class="product-grid" style="background-image:url(<?php echo base_url().$d['image'] ?>);">
							<div class="inner">
							</div>
						</div>
						<div class="desc">
							<h3><?php echo $d['nama_barang'] ?></h3>
							<span class="price"><?php echo $d['harga'] ?></span>
						</div>
					</div>
				</div>
				</a>
				<?php } ?>
			</div>
			<?php echo $this->pagination->create_links(); ?>
			
		</div>
	</div>
        <div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="fh5co-contact-info">
						<h3>Contact Information</h3>
						<ul>
							<li class="address">Surabaya<br> Jawa Timur, Indonesia</li>
							<li class="phone"><a href="tel://1234567920">0878 5531 5005</a></li>
							<li class="email"><a href="mailto:tvstore@gmail.com">tvstore_@gmail.com</a></li>
						</ul>
					</div>

				</div>
			</div>
			
		</div>
	</div>

	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; Anang 2017.</small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="https://instagram.com/tvstore_"><i class="icon-linkedin"></i></a></li>
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