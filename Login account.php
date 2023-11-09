<?php
include 'dbConnect.php';
// Check if the form is submitted
if(isset($_POST['submit'])){
    // Get the username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Here, you can perform validation and authentication against a database or any other data source
    
    // For simplicity, let's assume the correct username and password are "admin"
    $correct_username = "admin";
    $correct_password = "password";
    
    // Check if the entered username and password match the correct credentials
    if($username == $correct_username && $password == $correct_password){
        // Successful login, redirect to a protected page or perform any other desired action
        header("Location: dashboard.php");
        exit();
    } else {
        // Invalid credentials, show an error message
        $error_message = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="zh-HK">
<head>
    <header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入帳戶</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/all.css">
</head>
<body>
  <a href="index.html"><img src="images/artwork_logos_soldier.png" width="60" height="70"></a><strong class="animate-charcter">登入帳戶</strong>
</section>
</header>
<section class="link" >


<div class="dropdown">
<button class="dropbtn">主頁</a></button>
<div class="dropdown-content">
    <a href="index.html">學校傑出作品欣賞</a>
  </div>
</div>


<div class="dropdown">
<button class="dropbtn">最新消息</a></button>
<div class="dropdown-content">
    <a href="List of new works.html">新作品列表</a>
    <a href="ArtNews.html">美術新聞</a>
  </div>
</div>

<div class="dropdown">
<button class="dropbtn"><a>作品資訊</a></button>
<div class="dropdown-content">
    <a href="Artworks ranking.html">作品排行榜</a>
    <a href="Student testimonials.html">學生感言</a>
    <a href="Artworks album.html">作品相簿</a>
  </div>
</div>

<div class="dropdown">
<button class="dropbtn">登錄/註冊</a></button> 
<div class="dropdown-content">
    <a href="Login account.html">登錄帳戶</a>
    <a href="Register.html">進行註冊</a>
  </div>
</div>
<div class="dropdown">
<button class="dropbtn">關於我們</a></button>
<div class="dropdown-content">
<a href="about us.html">關於我們(詳細)</a>
<a href="common problem.html">常見問題</a>
<a href="contact us.html">聯繫我們</a>
</div>
</div>
<div class="slideshow-container">
<img class="mySlides" src="images/cefabc6aa7bd28cccd0713e4a3656cc9.jpg" style="width:100%;">
<img class="mySlides" src="images/BmWXkgF.jpeg" style="width:100%">
<img class="mySlides" src="images/sF0IA8u.jpeg" style="width:100%">
</div>
</div>

    <h2>登入你的帳戶</h2>
    <?php if(isset($error_message)){ ?>
        <p><?php echo $error_message; ?></p>
    <?php } ?>
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>
        
        <input type="submit" name="submit" value="Login">
    </form>
</body>
<footer> 
</div>
<?php include('footer.php'); ?>
</html>


