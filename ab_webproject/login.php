<?php

session_start();
include("php/connection.php");



if($_SERVER['REQUEST_METHOD']=="POST")
{
    //reading from database

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = " select * from user_info where Username  = '$username' limit 1" ;
    $result = mysqli_query( $con ,  $query);
    
    if($result)
    {
        if($result && mysqli_num_rows($result)>0)
            {
                $user_data = mysqli_fetch_assoc($result);
                
                if($user_data['password']===$password){

                    $_SESSION['Username'] = $username;

                    header("Location: ./index.php");
                    die;

                }

                
            }
    }
   
    
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
    <script defer src="scripts/validate.js"></script>
</head>
<body>
    <div class="container">
        <form id="form" method="post" >
            <h1>Login</h1>
            <div class="input-control">
                <label for="username">Username</label>
                <input id="username" name="username" type="text">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="password">Password</label>
                <input id="password"name="password" type="password">
                <div class="error"></div>
            </div>
            <button type="submit">Login</button>
            <p>Are you not a member? <a href="registration.php"> Register here</a></p>
        </form>
    </div>
</body>
</html>