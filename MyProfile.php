<?php include('dbConnect.php');

if(isset($_SESSION['email']))
    header("Location: /Login account.php");
?>


<!DOCTYPE html>
<html lang="zh-HK">
<head>  
    <header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>學校傑出作品欣賞網站</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/all.css">  
</head>
<body>
        <a href="index.php"><img src="images/artwork_logos_soldier.png" width="60" height="70"></a><strong class="animate-charcter"> 學校作品欣賞網站</strong>
        </section>
      </header>
    <section class="link" >
      
      <div class="dropdown">
        <button class="dropbtn">主頁</a></button>
        <div class="dropdown-content">
            <a href="index.php">學校傑出作品欣賞</a>  
          </div>
    </div>


        <div class="dropdown">
        <button class="dropbtn">最新消息</a></button>
        <div class="dropdown-content">
            <a href="List of new works.php">新作品列表</a>
            <a href="ArtNews.php">美術新聞</a>
          </div>
    </div>


    <div class="dropdown">
        <button class="dropbtn"><a>作品資訊</a></button>
        <div class="dropdown-content">
            <a href="Artworks ranking.php">作品排行榜</a>
            <a href="Student testimonials.php">學生感言</a>
            <a href="Artworks album.php">作品相簿</a>
          </div>
    </div>

    <div class="dropdown">
        <button class="dropbtn">登錄/註冊</a></button> 
        <div class="dropdown-content">
            <a href="Login account.php?op=login">登錄帳戶</a>
            <a href="Register.php">進行註冊</a>
            <a href="/functions.php?op=logout">登出</a>
          </div>
    </div>
        <div class="dropdown">
        <button class="dropbtn">關於我們</a></button>
        <div class="dropdown-content">
        <a href="about us.php">關於我們(詳細)</a>
        <a href="common problem.php">常見問題</a>
        <a href="contact us.php">聯繫我們</a>
        </div>
      </div>
      <div class="slideshow-container">
        <img class="mySlides" src="images/cefabc6aa7bd28cccd0713e4a3656cc9.jpg" style="width:100%;">
        <img class="mySlides" src="images/BmWXkgF.jpeg" style="width:100%">
        <img class="mySlides" src="images/sF0IA8u.jpeg" style="width:100%">
      </div>
    </div>
    
    <?php
    $email = "brian@gmail.hk";
    echo "hay your Email is  $email!";  
    ?>
     <footer>
    </div>
    <?php include('footer.php'); ?>
</html>