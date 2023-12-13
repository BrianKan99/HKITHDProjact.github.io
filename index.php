<?php include('dbConnect.php'); 

/*session_start();

if(!isset($_SESSION['Username']))
    HEADER("Location: /Login account.php")*/
?>

<!DOCTYPE html>
<html lang="zh-HK">
<head>
    <header style="background:#2980B9;">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>學校傑出作品欣賞網站</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.css">  
    <style>
      body{
         margin: 0;
         padding: 0;
         font-family: montserrat;
         background: linear-gradient(120deg,#2980b9, #8e44ad);
      }

      strong{
        position: relative;
         top: 10px;
      }
      iframe{
        position: relative;
        top: -50px;
        left: 450px;
      }
   </style>
</head>
<body>
    <a href="index.php"><img src="images/hkit-removebg-preview.png" width="90" height="90"></a><strong class="animate-charcter"> 學校傑出作品欣賞網站</strong>
        </section>
      </header>
    <section style="background:#2980B9;">
    <?php include('header.php'); ?>
    </section>
      </div>
    </div>
    
        <div class="row">
            <div class="Description-col">
              <h2>我們網站的描述 </h2>
        <p>歡迎來到香港科技專上書院(HKIT)學生藝術設計網站，這裡匯聚了創意與才華。 作為一個創意平台，我們的網站致力於展示學生的辛勤工作。 憑藉用戶友好的介面和無縫導航，它為用戶提供了一個節省時間的選項來存取和欣賞各種學生藝術作品。 從繪畫和雕塑到數位設計和攝影，我們的網站提供了一個虛擬畫廊來慶祝學生的藝術成就。 在我們的學生藝術設計網站上探索他們獨特的視角，從他們的創作中獲得靈感，並支持下一代藝術家。</p>
        <br>
        <p>讓我們發揮您的創造力並在支持性的環境中茁壯成長。</p>
        </div>
        <img src="images/1.png">
        </div>
    </div>
    </section>
    
  <table style="width:100%">
    <div class="row">

  <tr>
    <th><h3>學校代表作品</h3></th>
    <td class = "photo"><a class="spotlight" href="images/8.png" data-button="Click Me to Learn more!" data-button-href="https://www.artsthread.com/portfolios/subjective-objects" data-description="This project explores the concept of perceiving everyday objects from a bionic perspective, transforming them into giant wearable experiences. By making these objects visible and tangible, they become reliable guardians that bring joy to people's lives, particularly during moments spent at home. The goal is to discover innovative ways of experiencing reality and inanimate objects, pushing the boundaries of design. By focusing on everyday objects, I aim to convey the powerful nature of our surroundings, encouraging us to view things from different angles and be prepared for life's challenges.">
      <img src="images/8.png" alt="Subjective Objects"></a>
    <th><h3>學校代表作品</h3></th>
    <td class = "photo"><a class="spotlight" href="images/5.png" data-button="Click Me to Learn more!" data-button-href="https://mir-s3-cdn-cf.behance.net/projects/max_808_webp/a40710139992507.Y3JvcCwyNTk0LDIwMjgsNTk5NywyMjQw.jpg" data-description="Join Baxter, the charming cat with an insatiable hunger for both food and attention. Experience a delightful neighborhood adventure as Baxter embarks on a quest to satisfy his cravings, all while taking the time to greet his lovable friends along the way.">
      <img src="images/5.png" alt="Baxter is Hungry"></a>
    <th><h3>學校代表作品</h3></th>
    <td class = "photo"><a class="spotlight" href="images/9.png" data-button="Click Me to Learn more!" data-button-href="https://abduzeedo.com/exploring-bauhaus-influence-3d-illustration" data-description="This art collection seamlessly translates historical artistry into a contemporary visual language, exploring the harmonious structures of basic 3D shapes. The compositions, confined to square areas, evoke a sense of organized tranquility through meticulous placement. Inspired by Bauhaus architecture, where form follows function, each line and element serve a purpose. The Color Theory section takes viewers on a vibrant journey through abstract swirls, showcasing the power of color to captivate and evoke emotions. The Less is More section embodies minimalist aesthetics, resembling ceramic sculptures that tell narratives through simplicity. These artworks serve as a bridge between the past and the future, incorporating modern technology.">
      <img src="images/9.png" alt="Abstract 3D illustration artifacts"></a>
  </tr>
  <iframe width="950" height="500" src="https://www.youtube.com/embed/x03gXP9Hy_o">
</iframe>
<br>
<br>
  <tr>
    <td>&nbsp;</td>
    <td><h4>作品名稱 : Subjective Objects<br><br>學生姓名: Ms. Gloria Poon</h4><br></td>
    <td>&nbsp;</td>
    <td><h4>作品名稱 : Baxter is Hungry<br><br>學生姓名: Ms. Isabella Yeung</h4><br></td>
    <td>&nbsp;</td>
    <td><h4>作品名稱 : Abstract 3D illustration artifacts<br><br>學生姓名: Ms. Debbie Yuen</h4><br></td>
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