<?php

$conn = mysqli_connect('localhost','root','','hkitprojact');

if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_errno();
    exit();
}
?>