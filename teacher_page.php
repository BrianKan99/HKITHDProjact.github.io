<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['teacher_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="zh-HK">
<head>  
    <header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>老師頁面</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.css">  
</head>
<body>
        <a href="index.php"><img src="images/artwork_logos_soldier.png" width="60" height="70"></a><strong class="animate-charcter">老師頁面</strong>
        </section>
      </header>

      <?php include('header.php'); ?>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>歡迎登入<span>老師頁面</span></h3>
      <h1>你的名稱是<span><?php echo $_SESSION['teacher_name'] ?></span></h1>
      <p>this is an teacher page</p>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>