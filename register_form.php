<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

};


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

      form{
         position: absolute;
         top: 50%;
         left:50%;
         transform: translate(-50%, -50%);
         width: 400;
         background: white;
         border-radius: 10px;
      }

      h3{
         text-align: center;
         padding: 0 0 20px 0;
         border-bottom: 1px solid silver;
      }

      form{
         padding: 0 40px;
         box-sizing: bordrer-box;
      }

      form .txt_field{
         position: relative;
         border-bottom: 2px solid #adadad;
         margin: 30px 0;
      }

         input{
         width: 100%;
         padding: 0 5px;
         height: 40px;
         font-size: 16px;

      }

      input[type="submit"]{
         width: 100%;
         height: 50px;
         border: 1px solid;
         background: #2691d9;
         border-radius: 25px;
         font-size: 18px;
         color: #e9f4fb;
         font-weight: 700;
         cursor: pointer;
         outline: none;
      }

      input[type="submit"]:hover{
         border-color: #2691d9;
         transition: .5s;
      }

      select{
         width: 40%;
         height: 40px;
         font-size: 15px;
      }
</style>
    <header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>進行注冊</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.css">  
</head>
<body>
        <a><img src="images/artwork_logos_soldier.png" width="60" height="70"></a><strong class="animate-charcter">進行注冊</strong>
        </section>
      </header>

    <?php include('header.php'); ?>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="custom-select">

   <form action="" method="post">
      <h3>進行注冊</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="enter your name">
      <br><br>
      <input type="email" name="email" required placeholder="enter your email">
      <br><br>
      <input type="password" name="password" required placeholder="enter your password">
      <br><br>
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <br><br>
      <select name="user_type">
         <option value="student">student</option>
         <!--<option value="admin">admin</option>-->
         <option value="teacher">teacher</option>
         <option value="editor">editor</option>
      </select>
      <br><br>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login_form.php">login now</a></p>
   </form>

</div>

</body>
</html>