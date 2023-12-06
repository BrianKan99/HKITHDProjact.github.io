<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   //$name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   //$cpass = md5($_POST['cpassword']);
   //$user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'student'){

         $_SESSION['student_name'] = $row['name'];
         header('location:student_page.php');

      }elseif($row['user_type'] == 'teacher'){

        $_SESSION['teacher_name'] = $row['name'];
        header('location:teacher_page.php');
      
      }elseif($row['user_type'] == 'editor'){

         $_SESSION['editor_name'] = $row['name'];
         header('location:editor_page.php');

     }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>
   <!DOCTYPE html>
<html lang="zh-HK">
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
         top: 60%;
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

      strong{
        position: relative;
         top: 10px;
      }
      
</style>
<head>
    <header style="background:#2980B9;">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>帳號登入</title>

</head>
<body>
   <a href="index.php"><img src="images/hkit-removebg-preview.png" width="90" height="90"></a><strong class="animate-charcter"> 帳號登入</strong>
        </section>
      </header>
      <section style="background:#2980B9;">
      <?php include('header.php'); ?>
   </section>
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body> 
   
<div>

   <form  action="" method="post">
      <h3>請登入您的帳戶</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <br>
      <i class='bx bxs-user'></i>
      <input class="input1" type="email" name="email" required placeholder="enter your email">
      <br>
      <br>
      <i class='bx bxs-lock-alt'></i>
      <input class="input2" type="password" name="password" required placeholder="enter your password">
      <br>
      <br>
      <input class="input3" type="submit" name="submit" value="login" class="form-btn">
      <p>don't have an account? <a href="register_form.php">register now</a></p>
   </form>

</div>

</body>  
</html>