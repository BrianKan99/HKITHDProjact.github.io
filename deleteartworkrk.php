<?php
if ( isset($_GET["studentname"]) ) {
    $studentname = $_GET["studentname"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "hkitprojact";

    // Create connection
    $connection = new mysqli($servername, $username, $password, $database);

    $sql = "DELETE FROM artwork_ranking WHERE studentname=$studentname";
    $connection->query($sql);
}

header("location: /teacher_page.php");
exit;
?>