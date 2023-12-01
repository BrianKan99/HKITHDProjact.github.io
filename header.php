<?php
if (!session_id()) session_start();
include 'config.php'
?>


<button class="dropbtn"><a href="index.php">主頁</a></button>

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
        <button class="dropbtn">帳戶管理</a></button> 
        <div class="dropdown-content">
            <?php
      if ($_SESSION)
      {
        echo '
            <a href="/admin_page.php">我的個人資料</a>
            <a href="/functions.php?op=logout">登出</a>';
      }
      else
      {
        echo '<a href="/login_form.php">登錄帳戶</a>';
        echo '<a href="/register_form.php">進行註冊</a>';
      }
      ?>
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
        <img class="mySlides" src="images/girl-dream-pink-sunrise-artwork-cityscape-bridge-4961x2780-2564.jpg" style="width:100%">
        <img class="mySlides" src="images/girl-dream-bridge-supernova-cgi-artwork-5k-4961x2361-2557.jpg" style="width:100%">
        <img class="mySlides" src="images/alone-girl-woman-falling-stars-town-home-milky-way-dream-3840x2160-6657.jpg" style="width:100%">
        <img class="mySlides" src="images/59878f21f63a1b7c2fe2e8045f08cc1e.jpg" style="width:100%">
      </div>
    </div>    
