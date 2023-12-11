<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['teacher_name'])){
   header('location:login_form.php');
}
include ('./connect.php');
if(isset($_POST['submit'])) {
    $username=$_POST['username'];
    $email=$_POST['email'];
    $artworkname=$_POST['artworkname'];
    $image=$_FILES['file'];
    //echo $username;
    //echo "<br>";
    //echo $email;
    //echo "<br>";
    //echo $artworkname;
    //echo "<br>";
    //print_r($image);
    //echo "<br>";

    $imagefilename=$image['name'];
    //print_r($imagefilename);
    //echo "<br>";
    $imagefileerror=$image['error'];
    //print_r($imagefileerror);
    //echo "<br>";
    $imagfiletemp=$image['tmp_name'];
    //print_r($imagfiletemp);
    //echo"<br>";

    $filename_separate=explode('.',$imagefilename);
    //print_r($filename_separate);
    //echo"<br>";
    //$file_extension=strtolower($filename_separate[1]);
    //print_r($file_extension);
    $file_extension=strtolower(end($filename_separate));
    //print_r($file_extension);

    $extension=array('jpeg','jpg','png');
    if(in_array($file_extension,$extension)){
        $upload_image='images/'.$imagefilename; 
        //move_uploaded_file($imagfiletemp,$upload_image);  
        $sql="insert into `artwork_upload` (username,email,artworkname,image) values 
        ('$username','$email','$artworkname','$upload_image')"; 
        $result=mysqli_query($con,$sql);
        if($result){
            echo '<div class="alert alert-success" role="alert">
            <strong>Success</strong> Data inserted successfully
          </div>';
        }else{
            die(mysqli_error($con));
        }
    }
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
         height: 200vh;  
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
        img{
            width:100px;
        }
</style>
    <header style="background:#2980B9;">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>老師管埋頁面</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.css">  
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
        <a href="index.php"><img src="images/hkit-removebg-preview.png" width="60" height="70"></a><strong class="animate-charcter">老師管埋頁面</strong>
        </section>
      </header>
      <section style="background:#2980B9;">
      <?php include('header.php'); ?>
      </section>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   <br>

<div class="container">

   <div class="content">
      <h2>歡迎登入<span>老師管埋頁面</span></h2>
      <h1>你的名稱是<span><?php echo $_SESSION['teacher_name'] ?></span></h1>
      <p>以下的藝術品是學生上傳</p>
      <br><br>
      <a href="logout.php" class="button button1">登出</a>
   </div>
   <div class="container mt-5 d-flex justify-content-center">
    <table class="table table-bordered w-50">
  <thead class="table-dark">
    <tr>
      <th scope="col">學生姓名</th>
      <th scope="col">電子郵件</th>
      <th scope="col">作品名稱</th>
      <th scope="col">藝術品文件</th>
    </tr>
  </thead>
  <tbody>
    <?php
$sql="Select * from`artwork_upload`";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result)){
$username=$row['username'];
$email=$row['email'];
$artworkname=$row['artworkname'];
$image=$row['image'];
echo'<tr>
<td>'.$username.'</td>
<td>'.$email.'</td>
<td>'.$artworkname.'</td>
<td><img src='.$image.' /></td>
</tr>';
}

?>


  </tbody>
  </div> 
</table>
</div>
</body>
<br><br><br>      
<?php include('footer.php'); ?>
</html>