<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Thanks for Purchase - Welcome To UrHome</title>
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
					<a class="navbar-brand" href="<?php echo base_url();?>home"><img src="<?php echo base_url();?>assets/images/header-title.png" alt="My Site"></a>
				</div>
				<div class="navbar-right">
					<ul class="nav navbar-nav"> 
						<li><a href="<?php echo base_url();?>home"></a>Home</li>
						<li><a href="<?php echo base_url();?>login/logout">Logout</a></li>
					</ul>
				</div>	
			</div>
		</div>
	</div>
	<!-- Main Home -->
	<div id="payment-part">
		<div class="container">
			<h2>Thanks for Purchase</h2>
			<div class="divider"></div>
			<div class="payment-content">
				<h2>Dear Member</h2>
			    <span>Your payment was successful, thank you for purchase.</span><br/>
			    <span>Item Number : 
			        <strong><?php echo $item_number; ?></strong>
			    </span><br/>
			    <span>TXN ID : 
			        <strong><?php echo $txn_id; ?></strong>
			    </span><br/>
			    <span>Amount Paid : 
			        <strong>$<?php echo $payment_amt.' '.$currency_code; ?></strong>
			    </span><br/>
			    <span>Payment Status : 
			        <strong><?php echo $status; ?></strong>
			    </span><br/>	
			</div>
			<div class="row">
				<div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-12">
					<div class="payment-btn">
						<form method="post" action="<?php echo base_url();?>payment/paypal">
							<input type="hidden" name="item_number" value="<?php echo $cart_qty; ?>">
						    <input type="hidden" name="amount" value="<?php echo $cart_total; ?>">
						    <input type="submit" class="form-control btn btn-warning" name="submit" value="Pay with Paypal">
						</form>
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