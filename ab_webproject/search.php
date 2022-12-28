<?php

session_start();
include("php/add.php");
include("php/connection.php");

if (isset($_SESSION['Username'])) {
    $current_user = $_SESSION['Username'];
    $logged_status = '<a href="#" class="user"><i class="ri-user-fill"></i> ' . $current_user . ' </a>';
    $loggin_status = '<a href="php/log_out.php">  log out </a>';
} else {
    $logged_status = '<a href="login.php" class="user"><i class="ri-user-fill"></i> Sign in </a>';

    $loggin_status = '<a href="registration.php">  sign up </a>';
}

$table = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted

    $original = $_POST['original'];
    $destination = $_POST['destination'];
    $Departure = $_POST['Departure'];
    $arrival = $_POST['arrival'];
    $type = $_POST['type'];
    $class = $_POST['class'];


    $query = " select * from flights where original ='$original'   and destination = '$destination' and 
    Departure = '$Departure' and arrival = '$arrival' and type ='$type' and class = '$class';";

    $table .= "
        <br><br><br><br>
            <table class = 'table_contain'>
                <tr>
                <td><h1>original </h1></td>
                <td><h1>destination</h1></td>
                <td><h1>type</h1></td>
                <td><h1>class</h1></td>
                <td><h1>price</h1></td>
                <td><h1> Book </h1></td>
                </tr>
             ";
    $result = mysqli_query($con,  $query);
    if (mysqli_num_rows($result) < 1 ) {

        $table .= "

        
            <tr>
            <td colspan='6'> no flights found </td>

            </tr>
         ";
    } else {

        while ($row = mysqli_fetch_array($result)) {
           
            $i=$row['ID'];
           
            if($_GET['call'])
            {
                 addindex($i);
            }
            $table .= "
            
            <tr>
            <td> " . $row['original'] . "  </td>
            <td> " . $row['destination'] . "  </td>
            <td> " . $row['type'] . "  </td>
            <td> " . $row['class'] . "  </td>
            <td> " . $row['price'] . "  </td>
            <td><a href='search.php?call=1' > book now </a></td>
            </tr>
       
        ";
        }
    }
    $table .= "</table>";
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
    <div class="wrapper">
        <div class="container">
            <div class="container-form">
                <form method="post">
                    <h3 class="heading heading-yellow">Book your Flight</h3>


                    <div class="form-field">
                        <p>From</p>
                        <select name="original">
                            <option value="Cairo">Cairo</option>
                            <option value="Giza">Giza</option>
                            <option value="Alexandria">Alexandria</option>
                        </select>
                    </div>
                    <div class="form-field">
                        <p>Where To?</p>
                        <select name="destination">
                            <option value="saudi Arabia">saudi Arabia</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Dubai">Dubai</option>
                            <option value="Iran">Iran</option>
                        </select>
                    </div>
                    <div class="form-field">
                        <p>Time Departure</p>
                        <select name="Departure" id="#">
                            <option value="AM">AM</option>
                            <option value="PM">PM</option>

                        </select>
                    </div>
                    <div class="form-field">
                        <p>Time Arrival</p>
                        <select name="arrival" id="#">
                            <option value="AM">AM</option>
                            <option value="PM">PM</option>

                        </select>
                    </div>
                    <div class="form-field">
                        <p>Type of Trip</p>
                        <select name="type" id="#">
                            <option value="One Way">One Way</option>
                            <option value="Round Trip">Round Trip</option>
                        </select>
                    </div>
                    <div class="form-field">
                        <p>What class?</p>
                        <select name="class" id="#">
                            <option value="Economy">Economy</option>
                            <option value="Business">Business</option>
                            <option value="Premium">Premium</option>
                            <option value="First Class">First Class</option>
                        </select>
                    </div>
                    <button type="submit" class="btn">Submit</button>
                </form>
            </div>
        </div>
    </div>


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