<?php
include 'dbConnect.php';
?>

<!DOCTYPE html>
<html lang="zh-HK">
<head>
    <header>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>進行注册</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/all.css"> 
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
        <a><img src="images/artwork_logos_soldier.png" width="60" height="70"></a><strong class="animate-charcter"> 進行注册</strong>
        </section>
      </header>

    <?php include('header.php'); 
    if(isset($_POST['create'])){
        $firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$phonenumber = $_POST['phonenumber'];
		$password = $_POST['password'];

		echo $firstname. " " . $lastname. " " . $lastname . " " . $phonenumber . " " . $password;
    }
    ?>
    <div>
	<form action="registration.php" method="post">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<h2>Registration</h2>
					<h3>Fill up the form with correct values.</h3>
					<hr class="mb-3">
					<label for="firstname"><b>First Name</b></label>
					<input class="form-control" id="firstname" type="text" name="firstname" required>

					<label for="lastname"><b>Last Name</b></label>
					<input class="form-control" id="lastname"  type="text" name="lastname" required>

					<label for="email"><b>Email Address</b></label>
					<input class="form-control" id="email"  type="email" name="email" required>

					<label for="phonenumber"><b>Phone Number</b></label>
					<input class="form-control" id="phonenumber"  type="text" name="phonenumber" required>

					<label for="password"><b>Password</b></label>
					<input class="form-control" id="password"  type="password" name="password" required>
					<hr class="mb-3">
					<input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up">
				</div>
			</div>
		</div>
	</form>
</div>

</body>
<?php include('footer.php'); ?>
</html>