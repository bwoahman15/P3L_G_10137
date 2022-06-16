<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $name = "p3l_10137";

    $con = mysqli_connect($host, $user, $pass, $name);

    if(mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL : " . mysqli_connect_error();
    }
?>
