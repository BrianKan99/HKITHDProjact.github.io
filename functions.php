<?php
if($_GET['op']=='checkLogin')
{
    checkLogin($_POST['username'],$_POST['password']);
}
if($_GET['op']=='logout')
{
    echo 'Logout Page';
}

function checkLogin($username, $password)
{
        // For simplicity, let's assume the correct username and password are "admin"
    $staffUsername  =   "brian";
    $staffPassword  =   "password";
    // Check if the entered username and password match the correct credentials
    if($username == $staffUsername && $staffPassword == $password)
{   
    session_start();
    $_SESSION['username'] = $_POST['username'];
        // Successful login, redirect to a protected page or perform any other desired action
    header("Location: /index.php");
}
else
{
    header("Location: /Login account.php");
}
}
?>