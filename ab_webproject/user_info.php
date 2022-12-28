<?php

session_start();
include("php/add.php");
include("php/connection.php");

if (isset($_SESSION['Username'])) {
    $current_user = $_SESSION['Username'];
    $logged_status = '<a href="#" class="user"><i class="ri-user-fill"></i> ' . $current_user . ' </a>';
    $loggin_status = '<a href="php/log_out.php">  log out </a>';

    $table = "";

    $table .= "
    <br><br><br><br>
        <table class = 'table_contain'>
            <tr>
            <td><h1>original </h1></td>
            <td><h1>destination</h1></td>
            <td><h1>type</h1></td>
            <td><h1>class</h1></td>
            <td><h1>price</h1></td>
            
            </tr>
         ";

    //something was posted

    $idquery = " select * from buying_index where Username  = '$current_user' " ;
    $result1 = mysqli_query( $con ,  $idquery);
    while ($row = mysqli_fetch_array($result1)) {
           
        $i=$row['flight_id'];

        if (mysqli_num_rows($result1) < 0) {

            $table .= "
    
            
                <tr>
                <td colspan='6'> no flights booked </td>
    
                </tr>
             ";
        } else {
            $query = " select * from flights where ID = '$i' ";
            $result = mysqli_query($con,  $query);

            $ticket_row = mysqli_fetch_array($result);
            $table .= "
            
            <tr>
            <td> " . $ticket_row['original'] . "  </td>
            <td> " . $ticket_row['destination'] . "  </td>
            <td> " . $ticket_row['type'] . "  </td>
            <td> " . $ticket_row['class'] . "  </td>
            <td> " . $ticket_row['price'] . "  </td>
            </tr>";

        }
       
    
        
    }
   
    $table .= "</table>";



} else {
    $logged_status = '<a href="login.php" class="user"><i class="ri-user-fill"></i> Sign in </a>';

    $loggin_status = '<a href="registration.php">  sign up </a>';

    header("Location: ./login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Booking</title>
    <link rel="stylesheet" href="css/search.css">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">







</head>

<body>
    <style>
        a {
            text-decoration: none;
        }

        ul {
            list-style: none;
        }
    </style>
    <nav>
        <a href="index.php" class="logo"><i class="ri-plane-line"></i><span>Home</span></a>

        <ul class="navbar">

            <li><a href="index.php"> Home</a></li>
            <li><a href="#"> flights</a></li>
            <li><a href="contactus.php"> contact us</a></li>
            <li><a href="about_us.php"> About Us</a></li>

        </ul>

        <div class="mainbar">


            <?php echo ($logged_status); ?>
            <?php echo ($loggin_status); ?>
            <div class="bx bx-menu" id="menu-icon"></div>

        </div>
    </nav>

    <br><br><br> <br><br><br> <br><br><br>

    <p>booked flights
        



        <?php
        echo ($table);
        ?>








        <br><br><br><br><br><br><br>
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