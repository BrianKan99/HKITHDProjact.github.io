<?php include('dbConnect.php'); 

/*session_start();

if(!isset($_SESSION['Username']))
    HEADER("Location: /Login account.php")*/
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
        <a><img src="images/artwork_logos_soldier.png" width="60" height="70"></a><strong class="animate-charcter"> 學校作品欣賞網站</strong>
        </section>
      </header>

    <?php include('header.php'); ?>
    
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
        <p>Design Your Future: Transform Ideas into Artistry, Cultivate Skills, and Connect with a Global Community of Creators on our Student Design Website. Empowering You to Thrive in the Digital Age!</p>
        </div>
        <img src="images/1.png">
        </div>
    </div>
    
      <div class="row">
          <div class="Description-col">
            <h2>Our Website Description2</h2>
      <p>2No better place to meet new people. It’s an ideal place to build new friendships and make movie appreciation. We bring the networking and social life to you. One of the things that sets us apart is our friendly and welcoming members.</p>
      </div>
      <img src="images/2.png">
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
  <tr>
    <td>&nbsp;</td>
    <td><h4>Arkwork Name : Subjective Objects<br><br>Student Name: Ms. Gloria Poon</h4><br></td>
    <td>&nbsp;</td>
    <td><h4>Arkwork Name : Baxter is Hungry<br><br>Student Name: Ms. Isabella Yeung</h4><br></td>
    <td>&nbsp;</td>
    <td><h4>Arkwork Name : Abstract 3D illustration artifacts<br><br>Student Name: Ms. Debbie Yuen</h4><br></td>
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