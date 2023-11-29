<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "hkitprojact";

//Create connection
$connection = new mysqli($servername, $username, $password, $database);

$id = "";
$name = "";
$email = "";
$password = "";
$usertype = "";

$errorMessage = "";
$successMessage = "";

if ( $_SERVER['REQUEST_METHOD'] == 'GET') {
    //GET method: Show the data of the client

    if( !isset($_GET["id"]) ) {
        header("location: /index.php");
        exit;
    }

    $id = $_GET["id"];

    // read the row of the selected client from database table
    $sql = "SELECT * FROM user_form WHERE id=$id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location: /index.php");
        exit;
    }

    $id = $row["id"];
    $name = $row["name"];
    $email = $row["email"];
    $password = $row["password"];
    $usertype = $row["user_type"];
}
else {
    //// POST method: Update the data of the client

    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $usertype = $_POST["usertype"];

    do{
        if ( empty($id) || empty($name) || empty($email) || empty($password) || empty($usertype)) {
            $errorMessage = "All the fields are required";
            break;
        }

        $sql = "UPDATE user_form " .
               "SET id = '$id', name = '$name' , email = '$email', password = '$password' , user_type = '$usertype'" .
               "WHERE id = $id ";

        $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }

        $successMessage = "Client updated correctly";

        header("location: /admin_page.php");
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
                <label class="col-sm-3 col-form-label">id</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="id" value="<?php echo $id; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">password</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="password" value="<?php echo $password; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">usertype</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="usertype" value="<?php echo $usertype; ?>">
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
                <a class="btn btn-primary" href="/admin_page.php" role ="button">Cancel</a>
                </div>
            </div>  
        </form>
    </div>
</body>
</html>