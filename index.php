<?php

//Connecting to a mysql database on azure
$host_name = 'us-cdbr-azure-west-c.cloudapp.net';
$database = 'acsm_0a9b0d0d8c0e9e9';
$user_name = 'b0b0b0b0b0b0b0';
$password = 'c1c1c1c1c1c1c1c';

// Doing everything in a try catch block
try{
    // Create connection
    $conn = mysqli_connect($host_name, $user_name, $password, $database);
    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    else{
        echo "Connected to MySQL successfully";
    }
}catch(Exception $e){
    echo 'Message: ' .$e->getMessage();
}