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
         top: -30px;
         right: -420px;
         font-size: 30px;   
        }
</style>
    <header style="background:#2980B9;">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>老師管埋頁面</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.css">  
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
        <a href="index.php"><img src="images/hkit-removebg-preview.png" width="60" height="70"></a><strong class="animate-charcter">老師管埋頁面</strong>
        </section>
      </header>
      <section style="background:#2980B9;">
      <?php include('header.php'); ?>
      </section>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   <br>

<div class="container">

   <div class="content">
      <h2>歡迎登入<span>老師管埋頁面</span></h2>
      <h1>你的名稱是<span><?php echo $_SESSION['teacher_name'] ?></span></h1>
      <p>以下藝術品已被管埋</p>
      <br><br>
      <a href="logout.php" class="button button1">logout</a>
   </div>

</div>
</body>
<br><br><br>      
<?php include('footer.php'); ?>
</html>