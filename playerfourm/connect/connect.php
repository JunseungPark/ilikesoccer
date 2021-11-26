<?php
    $host = "localhost";
    $user = "dpfw8745";
    $pass = "Wnsrb13wnstmd";
    $db = "dpfw8745";

    $connect = new mysqli($host, $user, $pass, $db);
    $connect -> set_charset("utf8");

    if( mysqli_connect_errno()){
        // echo "Database Connect Fales";
    } else {
        //echo "Database Connect True";
    }
?>
