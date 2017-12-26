<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Welcome To UrHome HOME</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/homecss.css">
</head>
<body>
	<!-- Header Part -->
	<div id="header-part">
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/images/header-title.png" alt="UrHome"></a>
				</div>
				<div class="navbar-right">
					<ul class="nav navbar-nav"> 
						<li><a href="<?php echo base_url();?>">Home</a></li>
						<li><a href="<?php echo base_url();?>main">Products</a></li>
						<li><a href="#contact-home">Contact</a></li>
						<li><a href="<?php echo base_url();?>login">Login</a></li>
						<li><a href="<?php echo base_url();?>register">Signup</a></li>
					</ul>
				</div>	
			</div>
		</div>
	</div>
	<!-- Main Home -->
	<div id="main-home">
		<div class="container">
			<h2>Welcome to UrHome</h2>
			<div class="login-content">
				<a href="<?php echo base_url();?>main">Purchase You Like</a>
			</div>
		</div>
	</div>
	<!-- About Home -->
	<div id="about-home">
		<div class="container">
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="about-content">
					<i class="fa fa-shopping-basket" aria-hidden="true"></i>
					<h4>name-1</h4>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="about-content">
					<i class="fa fa-cubes" aria-hidden="true"></i>
					<h4>name-2</h4>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="about-content">
					<i class="fa fa-compass" aria-hidden="true"></i>
					<h4>name-3</h4>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="about-content">
					<i class="fa fa-language" aria-hidden="true"></i>
					<h4>name-4</h4>
				</div>
			</div>
		</div>
	</div>
	<!-- Gallery Home -->
	<div id="gallery-home">
		<div class="container-fluid">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="gallery-content">
					<img class="img-responsive" src="assets/images/gallery/1.jpg" alt="Gallery-1">
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="gallery-content">
					<img class="img-responsive" src="assets/images/gallery/2.jpg" alt="Gallery-2">
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="gallery-content">
					<img class="img-responsive" src="assets/images/gallery/1.jpg" alt="Gallery-3">
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="gallery-content">
					<img class="img-responsive" src="assets/images/gallery/3.jpg" alt="Gallery-4">
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="gallery-content">
					<img class="img-responsive" src="assets/images/gallery/2.jpg" alt="Gallery-5">
				</div>
			</div>
		</div>
	</div>
	<!-- Contact Home -->
	<div id="contact-home">
		<div class="container">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="contact-content">
					<i class="fa fa-envelope" aria-hidden="true"></i>
					<h4>100 - Street Name</h4>
					<h4>Area Name, City</h4>
					<h4>State, Country</h4>
				</div>
			</div>
		</div>
	</div>
	<div id="footer-home">
		<div class="container">
			<p>This is The Footer Contents || KVC Bose </p>
		</div>
	</div>
	<!-- Javascript -->
	<script type="text/javascript" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>