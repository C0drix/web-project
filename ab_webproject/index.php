<?php

    session_start();
	
        include("php/connection.php");
		if( isset($_SESSION['Username']) )
		{
			$current_user = $_SESSION['Username'];
			$logged_status = '<a href="#" class="user"><i class="ri-user-fill"></i> '.$current_user.' </a>';
			$loggin_status = '<a href="php/log_out.php">  log out </a>';
		}
		else
		{
			$logged_status = '<a href="login.php" class="user"><i class="ri-user-fill"></i> Sign in </a>';
			 
			$loggin_status = '<a href="registration.php">  sign up </a>';
		}

?>
<!DOCTYPE html>
<html>
	
<head>
	<title>Portfolio website</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<!---------------------------------------------- the navbar css files ----------------------------------------------->
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
	<!---------------------------------------------------------------------------------------------------------------------->

			<!-------------------------------------------------image slider css files----------------->
			<!--video link https://youtu.be/bW8X-tt5AZQ-->
				<link rel="stylesheet" href="css/image slider.css">
			<!-------------------------------------------------------------------------------------->




	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link
		href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
		rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
		integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
	<!----hero Section start---->
	<img src="img/first.jpg" class="parallax">
	<div class="hero">
		
		<nav>
			<a href="#" class="logo"><i class="ri-plane-line"></i><span>Home</span></a>

			<ul class="navbar">
				
				<li><a href="#contact_us">  booking</a></li>
				<li><a href="#contact_us">  flights</a></li>
				<li><a href="#contact_us">  contact us</a></li>
				<li><a href="#about_us">  About Us</a></li>

			</ul>

			<div class="mainbar">


				<?php echo($logged_status);?>
				<?php echo($loggin_status);?>
				<div class="bx bx-menu" id="menu-icon"></div>

			</div>
		</nav>

<!---slide show -->
		<div class="content">
			<div class="slider">
				<div class="slide active">
				  <img src="img/slides/1.jpg" alt="">
				  <div class="info">
					<h2>Explore the world</h2>
					<p></p>
				  </div>
				</div>
				<div class="slide">
				  <img src="img/slides/2.jpg" alt="">
				  <div class="info">
					<h2>Affordable flights</h2>
					<p>details</p>
				  </div>
				</div>
				<div class="slide">
				  <img src="img/slides/3.jpg" alt="">
				  <div class="info">
					  <h2>Visit anywhere You like</h2>
					  <p>details</p>
				  </div>
				</div>
				<div class="slide">
				  <img src="img/slides/4.jpg" alt="">
				  <div class="info">
					  <h2>Mountain River</h2>
					  <p>details.</p>
				  </div>
				</div>
				<div class="slide">
				  <img src="img/slides/5.jpg" alt="">
				  <div class="info">
					  <h2>Egypt Pyramids</h2>
					  <p>details.</p>
				  </div>
				</div>
				<div class="navigation">
				  <i class="fas fa-chevron-left prev-btn"></i>
				  <i class="fas fa-chevron-right next-btn"></i>
				</div>
				<div class="navigation-visibility">
				  <div class="slide-icon active"></div>
				  <div class="slide-icon"></div>
				  <div class="slide-icon"></div>
				  <div class="slide-icon"></div>
				  <div class="slide-icon"></div>
				</div>
			</div>
		</div>
	</div>

	<!----About section start---->
	
<div class="section_2">
		<div class="title">
			<h2  id="contact_us" >Our Services</h2>
		</div>

		<div class="box">
			<div class="card">
				<i class="fas fa-bars"></i>
				<h5>Booking</h5>
				<div class="card__content">
					<p>Bookin your flight is the first step into starting your enjoyable journey.It would be required to fill the form
						with your info </p>

					<p style="text-align: center;">
						<a class="button" href="user_info.php">Read More</a>
					</p>
				</div>
			</div>

			<div class="card">
				<i class="far fa-user"></i>
				<h5>FLIGHTS</h5>
				<div class="card__content">
					<p>Knowing when your flight begins and end is a major need for ease. Click  here to know when is your flight/ when are you going to land!</p>

					<p style="text-align: center;">
						<a class="button" href="search.php">Read More</a>
					</p>
				</div>
			</div>

			<div class="card">
				<i class="far fa-bell"></i>
				<h5>CONTACT US</h5>
				<div class="card__content">
					<p>If you experience any difficulties. Please Click the button to contact us about them, and we will be sure soon to reply back.</p>

					<p style="text-align: center;">
						<a class="button" href="contactus.php">Read More</a>
					</p>
				</div>
			</div>
		</div>
	</div>





	<br><br><br><br>



	<!-----service section start----------->

	<div class="animate_bg">
	</div>
	<section class="about" id="about_us">
		<div class="main">
			<img src="img/about_us.jpg">
			<div class="about-text">
				<h2>About us</h2>
				<h5>Booking <span>& Flights</span></h5>
				<p>>We offer one of the greatest services in terms of booking your flight and discovering all the places you wish to ever travel into.
					Our mission is to make your flight process more enjoyable and relaxing.</p>
				<a href="about_us.php" class="button">Let's Talk</a>
			</div>
		</div>
	</section>
	<br><br><br><br>
	<!------footer start--------->
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
	
</body>
	<!-- navbar js link--->
	<script type="text/javascript" src="scripts/navbar.js"></script>

	<!----------------------image slider js-->
	<script type="text/javascript" src="scripts/image slider.js"></script>
</html>