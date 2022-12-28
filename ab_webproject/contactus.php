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
<!DOCTYPE html>
<html lang="en">

<head>

    <!---------------------------------------------- the navbar css files ----------------------------------------------->
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!---------------------------------------------------------------------------------------------------------------------->
    
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/contact.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <script defer src="scripts/contact.js"></script>
</head>

<body>
    <style>
        a{
            text-decoration: none;
        }
        li{
            list-style: none;
        }
    </style>
    <nav>
			<a href="index.php" class="logo"><i class="ri-plane-line"></i><span>Home</span></a>

			<ul class="navbar">
				
				<li><a href="#">  booking</a></li>
				<li><a href="#">  flights</a></li>
				<li><a href="about_us.php">  About Us</a></li>

			</ul>

			<div class="mainbar">


				<?php echo($logged_status);?>
				<?php echo($loggin_status);?>
                <div class="bx bx-menu" id="menu-icon"></div>

			</div>
		</nav>


    <div class="main">
        <form id="form" action="/">
            <div class="title">
                <h1>Contact Us</h1>
            </div>
            <div class="inputs">
                <input type="text" required id="names">
                <label for="names">Name</label>
            </div>
            <div class="inputs">
                <input type="email" required id="email">
                <label for="email">Email</label>
            </div>
            <div class="inputs">
                <textarea id="message" rows="5" placeholder="Message"></textarea>
                <label for="message"></label>
            </div>
            <button type="submit"><strong>Submit</strong></button>
        </form>
    </div>
    <br><br><br><br><br><br>
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