<?php

    session_start();
    include("php/connection.php");


    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        //something was posted

        $username = $_POST['username'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $query = " insert into user_info (Username , age , email, password) values ( '$username' , '$age' , '$email', '$password') " ;
        mysqli_query( $con ,  $query);
        header("Location: ./login.php");
        die;
    }



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form Validation</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/validation.css">
    <!-- <script defer src="scripts/validation.js"></script> -->
</head>

<body>
    <div class="container">
        <form id="form" method="POST">
            <h1>Registration</h1>
            <div class="input-control">
                <label for="username">Username</label>
                <input id="username" name="username" type="text">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="age">Age</label>
                <input id="age" name="age" type="number">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="email">Email</label>
                <input id="email" name="email" type="text">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="password">Password</label>
                <input id="password" name="password" type="password">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="password2">Password again</label>
                <input id="password2" name="password2" type="password">
                <div class="error"></div>
            </div>
            <button type="submit">Sign Up</button>
            <p>Are you already a member? <a href="login.php"> Login here</a></p>
        </form>
    </div>
</body>

</html>