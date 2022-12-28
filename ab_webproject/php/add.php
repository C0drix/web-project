<?php

function addindex( $i ){
    if(isset($_SESSION['Username']))
    {
        $username2 = $_SESSION['Username'];
        $query_book =" insert into buying_index ( Username , flight_id) values ( '$username2' , '$i') ";
        mysqli_query( mysqli_connect("localhost", "root", "", "sign_up_info") ,  $query_book);
        header("Location: ../index.php");
    }
    else{
        header("Location: ../login.php");
    }
}

?>