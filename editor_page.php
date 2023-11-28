<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['editor_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="zh-HK">
<head>  
<style>
      body{
         margin: 0;
         padding: 0;
         font-family: montserrat;
         background: linear-gradient(120deg,#2980b9, #8e44ad);
         height: 100vh;
         overflow: hidden;    
         } 

         h1{
         position: absolute;
         top: 8px;
         right: 16px;
         font-size: 30px;   
        }

        p{
         position: absolute;
         top: 25%;
         right: -500px;
         width: 100%;
        }

        h2{
         position: relative;
         right: -750px;
         font-size: 30px;   
        }
</style>
    <header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編輯者頁面</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.css">  
</head>
<body>
        <a href="index.php"><img src="images/artwork_logos_soldier.png" width="60" height="70"></a><strong class="animate-charcter">編輯者頁面</strong>
        </section>
      </header>

      <?php include('header.php'); ?>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h2>歡迎登入<span>編輯者頁面</span></h2>
      <h1>welcome <span><?php echo $_SESSION['editor_name'] ?></span></h1>
      <p>this is an editor page</p>
      <a href="display.php" class="btn">檢視學生作品</a>
      <a href="Artworks ranking.php" class="btn">作品排行榜</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>