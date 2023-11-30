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

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
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


        // add new client to database
        $sql = "INSERT INTO artwork_ranking (studentname, city, citizenship, ranking, artworkname) " .
               "VALUES ('$studentname', '$city', '$citizenship', '$ranking', '$artworkname')";
        $result = $connection->query($sql);

        if(!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }

        $studentname = "";
        $city = "";
        $citizenship = "";
        $ranking = "";
        $artworkname = "";

        $successMessage = "Client added correctly";
         
        header("location: /admin_page.php");
        exit;

    }while (false);
}
?>

<!DOCTYPE html>
<html lang="en">
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
    <title>增新學生的藝術品</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container my-5">
        <h2>增新學生的藝術品</h2>

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
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">學生姓名</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="studentname" value="<?php echo $studentname; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">城市</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="city" value="<?php echo $city; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">國籍</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="citizenship" value="<?php echo $citizenship; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">排行</label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" name="ranking" value="<?php echo $ranking; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">作品</label>
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
                    <button type="submit" class="btn btn-primary" href="/teacher_page.php">Submit</button>
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