<?php
require_once('./operations.php');
?>

<!DOCTYPE html>
<html lang="zh-HK">
<head>  
    <header style="background:#2980B9;">
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
      <section style="background:#2980B9;">
      <?php include('header.php'); ?>
</section>

      <h1 class="text-center my-3">上傳你的作品吧!!</h1>
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