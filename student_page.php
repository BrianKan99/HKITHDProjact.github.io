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
<head>  
    <header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>學生上傳作品頁面</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.css">  
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
        <a href="index.php"><img src="images/artwork_logos_soldier.png" width="60" height="70"></a><strong class="animate-charcter">學生上傳作品頁面</strong>
        </section>
      </header>

      <?php include('header.php'); ?>

      <div class="content">
      <h3>歡迎登入<span>學生頁面</span></h3>
      <h1>welcome <span><?php echo $_SESSION['student_name'] ?></span></h1>
      <a href="logout.php" class="btn btn-dark">logout</a>

      <h1 class="text-center my-3">Upload form</h1>
      <div class="container d-flex justify-content-center">
            <form action="display.php" method="post" class="w-50" enctype="multipart/form-data">
            </h1>User Name :</h1>
              <?php   inputFields("Username", "username","","text") ?>
              </h1>Email :</h1>
              <?php   inputFields("Email", "email","","email") ?>
              </h1>Artwork Name :</h1>
              <?php   inputFields("Artworkname", "artworkname","","text") ?>
              </h1>Artwork File :</h1>
              <?php   inputFields("", "file","","file") ?>
              <button class="btn btn-dark" type="submit" name="submit">Submit</button>
            </form>
      </div>

</body>
</html>