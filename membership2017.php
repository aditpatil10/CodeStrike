<!DOCTYPE html>
<html>
<head>
	<script src="js/jquery.min.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	<meta name="theme-color" content="#2196F3">
	<title>Commitee Registration</title>

	<!-- CSS  -->
	<link href="min/plugin-min.css" type="text/css" rel="stylesheet">
	<link href="min/custom-min.css" type="text/css" rel="stylesheet" >
	<link rel="stylesheet" type="text/css" href="style_membership2017.css">
</head>
<body id="top" class="scrollspy">
	<!-- Pre Loader -->
	<div id="loader-wrapper">
		<div id="loader"></div>
		<div class="loader-section section-left"></div>
		<div class="loader-section section-right"></div>
	</div>

	<!--Navigation-->
	<div class="navbar-fixed">
		<nav class="purple" role="navigation">
			<div class="container">
				<div class="nav-wrapper">
					<a href="index.php" id="logo-container" class="brand-logo">CODESTRIKE</a>

					<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
				</div>
			</div>
		</nav>
	</div>
	

	<!-- Registration Form -->
	<div class="section scrollspy" id="team">
		<center>
			<h2 style="color: #2196F3">CodeStrike Membership 2017</h2>
			<div class="login-page form">
				<p><h4 style="color:#A020F0">Sign Up</h2></p>
				<hr>
				<form class="login-form" action="commiteeDB.php" method="POST">

					<p>Full Name:<input type="Text" name="fullName" placeholder="First Name + Last Name" autofocus="true" required></p>

					<p>Email ID:<input type="email" name="emailID" placeholder="abc@xyz.com" required></p>

					<p>Mobile No:<input type="tel" name="mobileNo" placeholder="98xxxxxxxx" required></p>

					<button type="submit">Register</button>	
				</form>
			</div>
		</center>
	</div>
	<!--Footer-->
	<?php 
	require 'footer.php';
	?>
</body>
</html>