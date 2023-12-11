<?php
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
         img{
            width:100px;
        }
</style>
    <header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>學生作品數據</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.css">  
</head>
<body>
<section style="background:#2980B9;">
        <a><img src="images/hkit-removebg-preview.png" width="90" height="90"></a><strong class="animate-charcter">學生作品數據</strong>
      </header>
    <?php include('header.php'); ?>
    </section>
    <br>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<h1 class="text-center my-4">學生上傳的作品</h1>
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
</body>
<?php include('footer.php'); ?>
</html>