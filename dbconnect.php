<?php

    $serverName = "localhost";
    $username = "root";
    $password = "";
    $dbName = "law";

    $conn = mysqli_connect($serverName , $username , $password , $dbName);


    if(!$conn){
        echo "Error! Database is Not connected";
    }

    
?>