<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['teacher_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="zh-HK">
<head>  
<style>
      body{
         margin: 0;
         padding: 0;
         font-family: montserrat;
         background: linear-gradient(120deg,#2980b9, #8e44ad);
         height: 100vh;
         overflow: hidden;    
         }  

      h1{
         position: absolute;
         top: 8px;
         right: 16px;
         font-size: 30px;   
        }
        p{
         position: absolute;
         top: 25%;
         right: -500px;
         width: 100%;
        }

        h2{
         position: relative;
         top: -30px;
         right: -420px;
         font-size: 30px;   
        }
</style>
    <header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>老師管埋頁面</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.css">  
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
        <a href="index.php"><img src="images/artwork_logos_soldier.png" width="60" height="70"></a><strong class="animate-charcter">老師管埋頁面</strong>
        </section>
      </header>

      <?php include('header.php'); ?>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   <br>

<div class="container">

   <div class="content">
      <h2>歡迎登入<span>老師管埋頁面</span></h2>
      <h1>你的名稱是<span><?php echo $_SESSION['teacher_name'] ?></span></h1>
      <p>以下藝術品已被管埋</p>
      <a class="btn btn-primary" href="createartworkrk.php" role="button">增新學生的藝術品</a>
      <br><br>
      <table class="table">
         <thead>
            <tr>
               <th>學生姓名</th>
               <th>城市</th>
               <th>國籍</th>
               <th>排行</th>
               <th>作品</th>
               <th>編輯/刪除</th>
            </tr>
         </thead>
         <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "hkitprojact";

            // Create connection
            $connection = new mysqli($servername, $username, $password, $database);

            //Check connection
            if ($connection->connect_error){
               die("Connection failed: " . $connection->connect_error);
            }

            // read all row from database table
            $sql = "SELECT * FROM artwork_ranking";
            $result = $connection->query($sql);

            if (!$result) {
               die("Invalid query: " . $connection->error);
            }
            // read data of each row
            while($row = $result->fetch_assoc()){
               echo "
               <tr>
               <td>$row[studentname]</td>
               <td>$row[city]</td>
               <td>$row[citizenship]</td>
               <td>$row[ranking]</td>
               <td>$row[artworkname]</td>
              <td>
                  <a class='btn btn-primary btn-sm' href='/editartworkrk.php?studentname=$row[studentname]'>Edit</a>
                  <a class='btn btn-danger btn-sm' href='/deleteartworkrk.php?studentname=$row[studentname]'>Delete</a>
              </td>
            </tr> 
               ";
            }

            ?>

         
         </tbody>
      </table>
      <a href="logout.php" class="button button1">logout</a>
   </div>

</div>
</body>
<br><br><br>      
<?php include('footer.php'); ?>
</html>