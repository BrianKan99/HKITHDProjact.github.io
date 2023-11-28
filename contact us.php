<!DOCTYPE html>
<html lang="zh-HK">
<head>
<style>
      body{
         margin: 0;
         padding: 0;
         font-family: montserrat;
         background: linear-gradient(120deg,#2980b9, #8e44ad);
      }

      label{
        position: relative;
         right: -20px;
      }
      input{
        position: relative;
         right: -20px;
      }

      button{
        position: relative;
         right: -20px;
      }

      h3{
        position: relative;
         right: -20px;
      }
   </style>
    <header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>聯繫我們</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.css">
</head>
<body>
        <a href="index.php"><img src="images/artwork_logos_soldier.png" width="60" height="70"></a><strong class="animate-charcter"> 聯繫我們</strong>
        </section>
      </header>


    <?php include('header.php'); ?>
    
      <br>
      <br>
      <div class="slideshow-container">
        <img class="mySlides" src="images/cefabc6aa7bd28cccd0713e4a3656cc9.jpg" style="width:100%;">
        <img class="mySlides" src="images/BmWXkgF.jpeg" style="width:100%">
        <img class="mySlides" src="images/sF0IA8u.jpeg" style="width:100%">
      </div>
    </div>
    

      <table style="width:100%">
        <tr colspan="2">
          <td class="sub-header">
            <h1>聯繫我們</h1></td>
        </tr>
        <tr>
          <td><h3>發訊息給我們吧!</h3><br></td>
        </tr>
        <tr>
          <td><div class="contact-col"> 
            <form action="message.php" method="post">
                    <label>Name:</label><input type="text" name="name"><br>

                    <label>Email:</label><input type="email" name="email"><br>

                    <label>Message:</label><input type="text" name="message"><br>

                    <button class="button" style="vertical-align:middle" type="submit" name="submit"><span>Send Message</span></button>
            </form></td>  
        </tr>
      </table>
    </div>
  </body>
  <?php include('footer.php'); ?>
</html>
