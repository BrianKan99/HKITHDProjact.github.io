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
         height: 150vh;
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
         right: -700px;
         font-size: 30px;   
         height: 170px;
        }

        .button{
         position: relative;
         right: -730px;

        }

        .pmain{
         position: absolute;
         top: 370px;
         right: -100px;
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

        <a href="index.php"><img src="images/hkit-removebg-preview.png" width="90" height="90"></a><strong class="animate-charcter">編輯者頁面</strong>
      </header>
      <?php include('header.php'); ?>
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h2>歡迎登入<span>編輯者頁面</span></h2>
      <h1>Welcome <span><?php echo $_SESSION['editor_name'] ?></span></h1>
      <a class = "button"href="display.php" class="button button1">檢視學生作品</a>
      <a class = "button" href="Artworks ranking.php" class="button button1">作品排行榜</a>
      <a class = "button" href="logout.php" class="button button1">logout</a>
   </div>

   <p class = "pmain">
   網站編輯者的更新網站職責可能包括：<br><br>
1. 編輯和校對網站上的內容，確保其準確性、一致性和流暢性。<br><br>
2. 負責更新和維護網站的內容，包括文字、圖片、視頻等。<br><br>
3. 確保網站的結構和導航系統清晰易用，以提供良好的用戶體驗。<br><br>
4. 處理網站上的用戶反饋和查詢，回答問題並提供支持。<br><br>
5. 監測網站的性能和流量，進行分析並提出改進建議。<br><br>
6. 跟蹤和應用最新的網站設計和內容管理系統的趨勢和最佳實踐。<br><br>
</p>

</body>
<br><br><br><br><br><br><br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br>
<?php include('footer.php'); ?>
</html>