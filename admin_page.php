<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="zh-HK">
<head>  
    <header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理員頁面</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.css">  
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
        <a href="index.php"><img src="images/artwork_logos_soldier.png" width="60" height="70"></a><strong class="animate-charcter">管理員頁面</strong>
        </section>
      </header>

      <?php include('header.php'); ?>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>歡迎登入<span>管理員頁面</span></h3>
      <h1>你的名稱是<span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>以下帳號已被管埋</p>
      <a class="btn btn-primary" href="create.php" role="button">NewClient</a>
      <br>
      <table class="table">
         <thead>
            <tr>
               <th>id</th>
               <th>name</th>
               <th>email</th>
               <th>password</th>
               <th>user_type</th>
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
            $sql = "SELECT * FROM user_form";
            $result = $connection->query($sql);

            if (!$result) {
               die("Invalid query: " . $connection->error);
            }
            // read data of each row
            while($row = $result->fetch_assoc()){
               echo "
               <tr>
               <td>$row[id]</td>
               <td>$row[name]</td>
               <td>$row[email]</td>
               <td>$row[password]</td>
               <td>$row[user_type]</td>
              <td>
                  <a class='btn btn-primary btn-sm' href='/edit.php?id=$row[id]'>Edit</a>
                  <a class='btn btn-danger btn-sm' href='/delete.php?id=$row[id]'>Delete</a>
              </td>
            </tr> 
               ";
            }

            ?>

         
         </tbody>
      </table>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>