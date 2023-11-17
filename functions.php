    <?php
    include_once 'dbConnect.php';
    
    $op ='none';
if(isset($_GET['op'])) $op = $_GET['op'];

  if($_GET['op']=='checkLogin')
  {
      checkLogin($_POST['email'],$_POST['password']);
  }
  if($_GET['op']=='logout')
  {
      logout();
  }
  function isStaff()
{
    return isset($_SESSION['email']);
}
  function logout()
  {
      session_start();
      session_destroy();
      header("Location: /");
  }
  function checkLogin($email, $password)
  {
    global $dbConnection;
    $staffQ = mysqli_query($dbConnection, "SELECT * FROM `account` WHERE `email`='".$email."'");

    $staff = mysqli_fetch_assoc($staffQ);
      /*$staffEmail     =   "brian@gmail.hk";
      $staffPassword  =   "password";*/
  
      if($email == $staff['email'] && $staff['password'] == $password)
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