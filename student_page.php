<?php

@include 'config.php';
require_once('./operations.php');

session_start();

if(!isset($_SESSION['student_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="zh-HK">
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=email], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=file], select {
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

form {
  border-radius: 5px;
  padding: 20px;
}

.container {
  position: relative;
}

.center {
  position: absolute;
  top: 20%;
  width: 100%;
  text-align: center;
  font-size: 50px;
}

.topleft {
  position: relative;
}

.topleft {
  position: absolute;
  top: 10px;
  left: 680px;
  font-size: 70px;
}

.topright {
  position: absolute;
  top: 8px;
  right: 16px;
  font-size: 30px;
}

body{
         margin: 0;
         padding: 0;
         font-family: montserrat;
         background: linear-gradient(120deg,#2980b9, #8e44ad);
         height: 100vh;
         overflow: hidden;    
         }  
         
input[type="text"]{
         width: 20%;
         padding: 0 5px;
         height: 40px;
         font-size: 16px;
      }

      input[type="email"]{
         width: 20%;
         padding: 0 5px;
         height: 40px;
         font-size: 16px;
      }
</style>
<head> 
    <header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>學生上傳作品頁面</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.css">  

</head>
<body>
        <a href="index.php"><img src="images/artwork_logos_soldier.png" width="60" height="70"></a><strong class="animate-charcter">學生上傳作品頁面</strong>
        </section>
      </header>

      <?php include('header.php'); ?>
      <br>

      <div class="content">
      <h3 class="topleft">歡迎登入<span>學生頁面</span></h3>
      <h1 class="topright">學生姓名:<span><?php echo $_SESSION['student_name'] ?></span></h1>
      <a href="logout.php" class="button button1">logout</a>

      <h1 class="center">上傳你的作品吧!!</h1>
      <div class="container d-flex justify-content-center">
            <form action="display.php" method="post" class="w-50" enctype="multipart/form-data">
            </h1>User Name :</h1>
              <?php   inputFields ("Username", "username","","text") ?>
              </h1>Email :</h1>
              <?php   inputFields("Email", "email","","email") ?>
              </h1>Artwork Name :</h1>
              <?php   inputFields("Artworkname", "artworkname","","text") ?>
              </h1>Artwork File :</h1>
              <?php   inputFields("", "file","","file") ?>
              <br>
              <button class="button" type="submit" name="submit">Submit</button>
            </form>
      </div>
<br>
</body>
<br><br><br><br><br><br><br><br><br><br><br>
<?php include('footer.php'); ?>
</html>