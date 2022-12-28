<?php

session_start();

include("php/connection.php");
if (isset($_SESSION['Username'])) {
	$current_user = $_SESSION['Username'];
	$logged_status = '<a href="#" class="user"><i class="ri-user-fill"></i> ' . $current_user . ' </a>';
	$loggin_status = '<a href="php/log_out.php">  log out </a>';
} else {
	$logged_status = '<a href="login.php" class="user"><i class="ri-user-fill"></i> Sign in </a>';

	$loggin_status = '<a href="registration.php">  sign up </a>';
}

?>



<html lang="en">

<head>
	
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">


	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="css/about_us.css">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ABOUT US</title>
</head>

<body>
	<nav>
		<a href="index.php" class="logo" style="position:relative;"><i class="ri-plane-line"></i><span>Home</span></a>

		<ul class="navbar">

			<li><a href="index.php"> HOME</a></li>
			<li><a href="#"> booking</a></li>
			<li><a href="#"> flights</a></li>
			<li><a href="contactus.php"> contact us</a></li>
			

		</ul>

		<div class="mainbar">


			<?php echo ($logged_status); ?>
			<?php echo ($loggin_status); ?>
			<div class="bx bx-menu" id="menu-icon"></div>

		</div>
	</nav>


	<div class="Page">
		<br><br><br><br><br><br><br>
		<div class="ALL">
			<div class="box">

				<p>
				<h1 id="AB">ABOUT US</h1>
				</p>

				<h3 id="TEXT">We offer one of the greatest services in terms of booking your flight and discovering all the places you wish to ever travel into.
					Our mission is to make your flight process more fun and enjoyable at all times.</h3>
			</div>

		</div>
		<div class="box2">
			<div class="boxX" float="right">
				<p>
				<h1 id="AB">FLIGHT</h1>
				</p>
				<h3 id="TEXT">We offer the best tracking system for a safe experience. It would allow you to know when does your flight begin and how long does it take.</h3>
			</div>

			<div class="boxY">
				<p>
				<h1 id="AB">CONTACT US</h1>
				</p>
				<h3 id="TEXT">If you experience any certain difficulties throughout the journey; it would be recommended to contact us from any of our social media accounts.</h3>
			</div>
		</div>
	</div>


	</div>
	<div class="img">
		<img src="img/about_us.jpg" width=100% height="100%">
	</div>


	<footer>
		<p>Fares Wael, Qasem Magdi, Hatem Magdi</p>
		<p>To Find out more about our Airlines check the following media accounts</p>
		<div class="social">
			<a href="#"><i class="fab fa-facebook-f"></i></a>
			<a href="#"><i class="fab fa-instagram"></i></a>
			<a href="#"><i class="fab fa-dribbble"></i></a>
		</div>
		<p class="end">CopyRight By Stupid Geniusses</p>
	</footer>

	<script type="text/javascript" src="scripts/navbar.js"></script>
</body>

</html>