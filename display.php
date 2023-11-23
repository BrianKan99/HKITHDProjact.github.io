<?php
include ('./connect.php');
if(isset($_POST['submit'])) {
    $username=$_POST['username'];
    $email=$_POST['email'];
    $artworkname=$_POST['artworkname'];
    $image=$_FILES['file'];
    echo $username;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $artworkname;
    echo "<br>";
    print_r($image);
    echo "<br>";

    $imagefilename=$image['name'];
    print_r($imagefilename);
    echo "<br>";
    $imagefileerror=$image['error'];
    print_r($imagefileerror);
    echo "<br>";
    $imagfiletemp=$image['tmp_name'];
    print_r($imagfiletemp);
    echo"<br>";

    $filename_separate=explode('.',$imagefilename);
    print_r($filename_separate);
    echo"<br>";
    //$file_extension=strtolower($filename_separate[1]);
    //print_r($file_extension);
    $file_extension=strtolower(end($filename_separate));
    print_r($file_extension);

    $extension=array('jpeg','jpg','png');
    if(in_array($file_extension,$extension)){
        $upload_image='images/'.$imagefilename; 
        move_uploaded_file($imagfiletemp,$upload_image);  
        $sql="insert into`artwork_upload` (username,email,artworkname,image) values ('$username','$email','$artworkname','$upload_image')"; 
        $result=mysqli_query($con,$sql);
        if($result){
            echo '<div class="alert alert-success" role="alert">
            <strong>Success</strong>Data inserted successfully
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>顯示數據</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <h1 class="text-center my-4">User data</h1>
</body>
</html>