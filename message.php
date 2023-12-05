<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "hkitprojact";

$conn = mysqli_connect($server, $username, $password, $dbname);

if(isset($_POST['submit'])){

if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {

    $name = $_POST['name'] ;
    $email = $_POST['email'] ;
    $message = $_POST['message'] ;

    $query = "insert into message(name,email,message) values('$name', '$email', '$message')" ;

    $run = mysqli_query($conn,$query) or die(mysqli_error());

    if($run){
    echo " Form submitted successfully" ;

    }
    else {
     echo "Form not submitted";
    }
}   
else {
    echo " all fields required" ;
}

}

?>
