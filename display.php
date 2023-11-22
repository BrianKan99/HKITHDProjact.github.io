<?php

include ('./connect.php');
if(isset($_POST['submit'])) {
    $username=$_POST['username'];
    $email=$_POST['email'];
    $artworkname=$_POST['artworkname'];
    $file=$_FILES['file'];
    echo $username;
    echo "<br>"
    echo $email;
    echo "<br>"

}
?>

<!DOCTYPE html>
<html lang="zh-HK">
<head>  
    <header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>顯示數據</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.css">  
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>