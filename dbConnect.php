<?php
$dbConnection = mysqli_connect("localhost","root", "", "account");

if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_errno();
    exit();
}

echo "connect work";