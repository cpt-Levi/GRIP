<?php
    //Creating connection between the database and the web pages
    $servername = "localhost:3308";
    $username = "root";
    $password = "";
    $database = "tsfbank";

    $connection = mysqli_connect($servername, $username, $password, $database);
    
    if($connection)
    {
        echo "Connection Established";
    }
    else
    {
        echo "Connection Failed";
    }

?>