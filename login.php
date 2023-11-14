<?php
session_start();
require_once 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username=$_POST["username"];
	$password=$_POST["password"];

  $username=mysqli_real_escape_string($con, $username);
  $password=mysqli_real_escape_string($con,$password);

  $sql="select * from register where username='$username'";
  $result=mysqli_query($con,$sql);

  if ($result) {
    $row=mysqli_fetch_assoc($result);
    if ($row && password_verify($password, $row['password'])) {
      $_SESSION['username']=$username;
      header("Location: index.php");
      exit();
    }
    else{
      echo "<script>alert('Invalid credentials');</script>";
    }
  }
else{
  echo "<script>alert('Login failed');</script>".mysqli_error($con);
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
        <h1 id="name"><img src="img/logo.jpeg" style="width:70px;margin-top:-5px;">&nbsp&nbspAttendance Management System </h1>

</div>
<br><br>
<!-- End Header -->
<!--User Login Form-->
<div class="container">
      <div class="row justify-content-center align-items-center inner-row">
        <div class="col-md-5">
          <div class="form-box p-5">
            <div class="form-title">
              <h2 class="fw-bold mb-5"><b>Login</b></h2>
            </div>
            <div id="error">     </div>
            <form id="form" method="post" action="">
              <div class="form-floating mb-3">
                <input type="text" class="form-control form-control-sm  " placeholder="Email" id="floatingInput" name="username" required>
                <label for="floatingInput">Email</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control form-control-sm" placeholder="password" id="floatingPassword" name="password" required>
                <label for="floatingPassword">Password</label>
              </div>
              <div class="mt-3">
                <button class="btn primarybg text-white" type="submit" name="submit">Login</button>
              </div>
            </form>
            <div class="mt-3">
              <span>Don't have an account?</span><button class="p-0 border-0 bg-transparent primaryColor"><a href="register.php">Register</a></button>
            </div>	
          </div>

    	
    </div>
</body>
</html>