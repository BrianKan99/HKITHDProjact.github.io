<?php
include 'dbConnect.php';
?>

<!DOCTYPE html>
<html lang="zh-HK">
<head>
    <header style="background:#2980B9;">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入帳戶</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/all.css">
</head>
<body>
  <a href="index.php"><img src="images/artwork_logos_soldier.png" width="60" height="70"></a><strong class="animate-charcter">登入帳戶</strong>
</section>
</header>
<section style="background:#2980B9;">
<?php include('header.php'); ?>
</section>

<div class="slideshow-container">
<img class="mySlides" src="images/cefabc6aa7bd28cccd0713e4a3656cc9.jpg" style="width:100%;">
<img class="mySlides" src="images/BmWXkgF.jpeg" style="width:100%">
<img class="mySlides" src="images/sF0IA8u.jpeg" style="width:100%">
</div>
</div>

    <h2>登入你的帳戶</h2>
    <br>
    <form action="functions.php?op=checkLogin" method="post">

    <label for="email">電郵:</label>
    <input type="email" id="email" name="email" require><br>

    <label for="email">密碼:</label>
    <input type="password" id="password" name="password">

    <br>
    <input type="submit" value="登入">
</form> 
</body>
<footer> 
</div>
<?php include('footer.php'); ?>
</html>


