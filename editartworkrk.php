<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "hkitprojact";

//Create connection
$connection = new mysqli($servername, $username, $password, $database);

$studentname = "";
$city = "";
$citizenship = "";
$ranking = "";
$artworkname = "";

$errorMessage = "";
$successMessage = "";

if ( $_SERVER['REQUEST_METHOD'] == 'GET') {
    //GET method: Show the data of the client

    if( !isset($_GET["studentname"]) ) {
        header("location: /index.php");
        exit;
    }

    $studentname = $_GET["studentname"];

    // read the row of the selected client from database table
    $sql = "SELECT * FROM artwork_ranking WHERE studentname=$studentname";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location: /index.php");
        exit;
    }

    $studentname = $row["studentname"];
    $city = $row["city"];
    $citizenship = $row["citizenship"];
    $ranking = $row["ranking"];
    $artworkname = $row["artworkname"];
}
else {
    //// POST method: Update the data of the client

    $studentname = $_POST["studentname"];
    $city = $_POST["city"];
    $citizenship = $_POST["citizenship"];
    $ranking = $_POST["ranking"];
    $artworkname = $_POST["artworkname"];

    do{
        if ( empty($studentname) || empty($city) || empty($citizenship) || empty($ranking) || empty($artworkname)) {
            $errorMessage = "All the fields are required";
            break;
        }

        $sql = "UPDATE artwork_ranking " .
               "SET studentname = '$studentname', city = '$city' , citizenship = '$citizenship', ranking = '$ranking' , artworkname = '$artworkname'" .
               "WHERE id = $id ";

        $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }

        $successMessage = "Client updated correctly";

        header("location: /teacher_page.php");
        exit;

    }while (false);
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
         height: 100vh;
         overflow: hidden;    
         }
</style>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container my-5">
        <h2>New Client</h2>

        <?php
        if (!empty($errorMessage)) {
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button type=button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        }
        ?>

        <form method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">studentname</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="studentname" value="<?php echo $studentname; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">city</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="city" value="<?php echo $city; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">citizenship</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="citizenship" value="<?php echo $citizenship; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">ranking</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="ranking" value="<?php echo $ranking; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">artworkname</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="artworkname" value="<?php echo $artworkname; ?>">
                </div>
            </div>

            <?php
            if (!empty($errorMessage)) {
                echo "
                <div class='row mb-3'>
                    <dir class='offset-sm-3 col-sm-6'>
                        <div class='alert alert-success alert-dismissible fade show' role='alert'>
                             <strong>$successMessage</strong>
                             <button type=button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>
                    </div>
                </div>
                ";    
            }
            ?>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-3 d-grid">
                <a class="btn btn-primary" href="/teacher_page.php" role ="button">Cancel</a>
                </div>
            </div>  
        </form>
    </div>
</body>
</html>