    <?php
  if($_GET['op']=='checkLogin')
  {
      checkLogin($_POST['email'],$_POST['password']);
  }
  if($_GET['op']=='logout')
  {
      logout();
  }
  
  function logout()
  {
      session_start();
      session_destroy();
      header("Location: /");
  }
  function checkLogin($email, $password)
  {
      $staffEmail     =   "brian@gmail.hk";
      $staffPassword  =   "password";
  
      if($email == $staffEmail && $staffPassword == $password)
      {
          //認證是一個職員 SESSION
          session_start();
          $_SESSION['email'] = $email;
  
          header("Location: /MyProfile.php");
      }
      else
      {
          header("Location: /Login account.php");
      }
  }
    ?>