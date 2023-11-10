<?php include('dbConnect.php'); 

session_start();

if(!isset($_SESSION['Username']))
    HEADER("Location: /Login account.php")
?>

<?php
$nameQ = mysqli_query($dbConnection, "SELECT * FROM 'account'");

while ($account = mysqli_fetch_assoc($nameQ)) {
  echo $account['accountName']. '<br>';
}
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
            <a href="Login account.php">登錄帳戶</a>
            <a href="Register.php">進行註冊</a>
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
    
        <div class="row">
            <div class="Description-col">
              <h2>Our Website Description</h2>
        <p>No better place to meet new people. It’s an ideal place to build new friendships and make movie appreciation. We bring the networking and social life to you. One of the things that sets us apart is our friendly and welcoming members.</p>
        </div>
        <img src="images/abstract-colorful-splash-3d-background-generative-ai-background.jpg">
        </div>
    </div>
    
      <div class="row">
          <div class="Description-col">
            <h2>Our Website Description2</h2>
      <p>2No better place to meet new people. It’s an ideal place to build new friendships and make movie appreciation. We bring the networking and social life to you. One of the things that sets us apart is our friendly and welcoming members.</p>
      </div>
      <img src="images/abstract-colorful-splash-3d-background-generative-ai-background.jpg">
      </div>
    </section>
    
  <table style="width:100%">
    <div class="row">

  <tr>
    <th><h3>學校代表作品</h3></th>
    <td class = "photo"><a class="spotlight" href="images/digital-artwork-with-swirling-patterns-flowers-generative-ai.jpg" data-button="Click Me!" data-button-href="javascript:alert('You can open an URL or execute some Javascript here.')" data-description="Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.">
      <img src="images/digital-artwork-with-swirling-patterns-flowers-generative-ai.jpg" alt="Lorem ipsum dolor sit amet"></a>
    <th><h3>學校代表作品</h3></th>
    <td class = "photo"><a class="spotlight" href="images/digital-artwork-with-swirling-patterns-flowers-generative-ai.jpg" data-button="Click Me!" data-button-href="javascript:alert('You can open an URL or execute some Javascript here.')" data-description="Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.">
      <img src="images/digital-artwork-with-swirling-patterns-flowers-generative-ai.jpg" alt="Lorem ipsum dolor sit amet"></a>
    <th><h3>學校代表作品</h3></th>
    <td class = "photo"><a class="spotlight" href="images/digital-artwork-with-swirling-patterns-flowers-generative-ai.jpg" data-button="Click Me!" data-button-href="javascript:alert('You can open an URL or execute some Javascript here.')" data-description="Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.">
      <img src="images/digital-artwork-with-swirling-patterns-flowers-generative-ai.jpg" alt="Lorem ipsum dolor sit amet"></a>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><p>2No better place to meet new people. It’s an ideal place to build new friendships and make movie appreciation. We bring the networking and social life to you. One of the things that sets us apart is our friendly and welcoming members.</p></td>
    <td>&nbsp;</td>
    <td><p>2No better place to meet new people. It’s an ideal place to build new friendships and make movie appreciation. We bring the networking and social life to you. One of the things that sets us apart is our friendly and welcoming members.</p></td>
    <td>&nbsp;</td>
    <td><p>2No better place to meet new people. It’s an ideal place to build new friendships and make movie appreciation. We bring the networking and social life to you. One of the things that sets us apart is our friendly and welcoming members.</p></td>
  </tr>
</table>  
    </ul> 
    </nav>
        </main>

        <div class="spotlight-group" data-fit="cover" data-autohide="all">
          <script src="dist/spotlight.bundle.js"></script>

        </body>       
      <script>
        var myIndex = 0;
        carousel();
        
        function carousel() {
          var i;
          var x = document.getElementsByClassName("mySlides");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          myIndex++;
          if (myIndex > x.length) {myIndex = 1}    
          x[myIndex-1].style.display = "block";  
          setTimeout(carousel, 2000); // Change image every 2 seconds
        }
        </script>
     <footer>
    </div>
    <?php include('footer.php'); ?>
</html>