<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login - Welcome To UrHome</title>
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
					<a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/images/header-title.png" alt="My Site"></a>
				</div>
				<div class="navbar-right">
					<ul class="nav navbar-nav"> 
						<li><a href="<?php echo base_url();?>">Home</a></li>
						<li><a href="<?php echo base_url();?>main">Products</a></li>
						<li><a href="<?php echo base_url();?>register">Signup</a></li>
					</ul>
				</div>	
			</div>
		</div>
	</div>
	<!-- Main Home -->
	<div id="main-login">
		<div class="container">
			<div class="login-content">
				<h4>User Login</h4>
				<form method="post" action="<?php echo base_url();?>login/validate_login">
					<div class="form-group col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-2 col-sm-6 col-xs-12">
						<label class="pull-right">User Email :</label>
					</div>
					<div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<input type="email" class="form-control" name="user_email">
						<span class="text-danger"><?php echo form_error('user_email'); ?></span>
					</div>
					<div class="form-group col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-2 col-sm-6 col-xs-12">
						<label class="pull-right">User Password :</label>
					</div>
					<div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<input type="password" class="form-control" name="user_password">
						<span class="text-danger"><?php echo form_error('user_password'); ?></span>
					</div>
					<div class="form-group col-lg-3 col-lg-offset-5 col-md-4 col-md-offset-5 col-sm-6 col-xs-12">
						<input type="submit" class="form-control btn btn-success" name="login-submit">
						<span class="text-danger"><?php echo $this->session->flashdata('error'); ?></span>
					</div>
					<div class="col-lg-4 col-lg-offset-5 col-md-4 col-md-offset-5 col-sm-6 col-xs-12">
						<h4>If You are New, <a href="<?php echo base_url();?>register">Signup</a> Here!</h4>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Footer Part -->
	<nav class="navbar navbar-fixed-bottom">
		<div id="footer-home">
			<div class="container">
				<p>This is The Footer Contents || KVC Bose </p>
			</div>	
		</div>
	</nav>
	<!-- Javascript -->
	<script type="text/javascript" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>