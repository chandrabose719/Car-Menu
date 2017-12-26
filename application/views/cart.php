<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cart - Welcome To UrHome</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/maincss.css">
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
					<a class="navbar-brand" href="<?php echo base_url();?>main"><img src="<?php echo base_url();?>assets/images/header-title.png" alt="My Site"></a>
				</div>
				<div class="navbar-right">
					<ul class="nav navbar-nav"> 
						<li><a href="<?php echo base_url();?>home">Home</a></li>
						<li><a href="<?php echo base_url();?>main">products</a></li>
						<li><a href="<?php echo base_url();?>login">Login</a></li>
						<li><a href="<?php echo base_url();?>register">Signup</a></li>
					</ul>
				</div>	
			</div>
		</div>
	</div>
	<!-- Main Home -->
	<div id="cart-part">
		<div class="container">
			<h2>Cart</h2>
			<div class="divider"></div>
			<div class="cart-content">
				<div class="table-responsive"> 
					<table class="table table-bordered table-striped">
						<tr>
							<th class="text-center">Product Name</th>
							<th class="text-center">Product Quantity</th>
							<th class="text-center">Product Amount</th>
						</tr>
						<?php
							$cart_total = 0;
							foreach ($cart_product as $row) {
								$product_name = $row['name'];
								$product_name = str_replace('_', ' ' , $product_name);
								$product_name = strtoupper($product_name);
						?>
						<tr>
							<td class="text-center"><?php echo $product_name; ?></td>
							<td class="text-center">
								<!-- <a href="<?php echo base_url(); ?>cart/productDecreament/<?php echo $row['id']; ?>"> - </a> --> 
								<?php echo $row['qty']; ?>
								<!-- <a href="<?php echo base_url(); ?>cart/productIncreament&id=<?php echo $row['id']; ?>"> + </a> -->
							</td>
							<td class="text-center"><?php echo $row['subtotal']; ?></td>
						</tr>
						<?php
							$cart_total += $row['subtotal'];
							}
						?>
						<tr>
							<th class="text-center"></th>
							<th class="text-center">Total Amount</th>
							<th class="text-center"><?php echo $cart_total; ?></th>
						</tr>
					</table>
				</div>	
			</div>
			<div class="row">
				<div class="col-lg-4 col-lg-offset-2 col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-xs-12">
					<div class="back-btn">
						<a class="form-control btn btn-warning" href="<?php base_url();?>main">Back To Product</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<div class="next-btn">
						<a class="form-control btn btn-info" href="<?php base_url();?>payment">Proceed To Payment</a>
					</div>
				</div>
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