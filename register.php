<?php
require_once 'connect.php';
if ($_SERVER["REQUEST_METHOD"]== "POST") {
	$username=$_POST['username'];
	$password=$_POST['password'];

	$hashedpassword=password_hash($password, PASSWORD_DEFAULT);

	$sql="insert into register (username,password)values('$username','$hashedpassword')";
	if (mysqli_query($con,$sql)) {
		echo "<script>alert('Registeration successfull!');</script>";
	}
	else{
		echo "<script>alert('Registeration failed');</script>".mysqli_error($con);
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Khattak Academy</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="bootstrap.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="main.css" rel="stylesheet">

</head>
<body>
<div class="container">
    <div class=" row" id="namee">
        <h1 id="name"><img src="img/logo.jpeg" style="width:70px;margin-top:-5px;">&nbsp&nbspAttendance Management System</h1>
</div>
<br><br>
<!-- End Header -->

<!-- REgisteration form -->

    	<div class="row justify-content-center align-items-center inner-row">
    		<div class="col-md-5">
    			<div class="form-box p-5">
    				<div class="form-title">
    					<h2 class="fw-bold mb-5"><b>Create your Account</b></h2>
    				</div>
    				<form action="" method="post">
    					<div class="form-floating mb-3">
    						<input type="text" class="form-control " placeholder="Name"  name="fname" required>
    						<label for="floatingInput">Name</label>
    					</div>
    					<div class="form-floating mb-3">
    						<input type="text" class="form-control form-control-sm" placeholder="Email"  required name="username">
    						<label for="floatingInput">Email</label>
    					</div>
    					<div class="form-floating mb-3">
    						<input type="text" class="form-control form-control-sm" placeholder="Job title"  name="user" required>
    						<label for="floatingInput">phone</label>
    					</div>
    					<div class="form-floating mb-3">
    						<input type="password" class="form-control form-control-sm" placeholder="password"  name="password" required>
    						<label for="floatingPassword">Password</label>
    					</div>
    					<div class="mt-3">
    						<input type="submit" class="btn primarybg text-white"  name="register" value="Register">
    					</div>
    				</form>
    				<div class="mt-3">
    					<span>Don't have an account?</span><button class="p-0 border-0 bg-transparent primaryColor"><a href="login.php"> Login</a></button>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</body>
</html>