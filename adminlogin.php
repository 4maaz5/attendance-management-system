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
        <h1 id="name">Attendance Management System <a href="#">Admin Panel</a></h1>

</div>
<br><br>
<!-- End Header -->
<!-- Admin Login Form-->
<div class="container">
      <div class="row justify-content-center align-items-center inner-row">
        <div class="col-md-5">
          <div class="form-box p-5">
            <div class="form-title">
              <h2 class="fw-bold mb-5"><b>Admin Login</b></h2>
            </div>
            <div id="error"></div>
            <form action="adminpage.php"  method="post">
              <div class="form-floating mb-3">
                <input type="text" class="form-control form-control-sm" placeholder="UserName"  id="floatingInput" name="username" required="">
                
                <label for="floatingInput">Email</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control form-control-sm" placeholder="password"  id="floatingPassword" name="password" required="">
                
                <label for="floatingPassword">Password</label>
              </div>
              <div class="mt-3">
                <input type="submit" class="btn primarybg text-white" name="adminloginbtn" value="Login">
              </div>
            </form>

         <?php
         echo "<script>alert('Plz enter a valid Username and Password.');</script>";
         
         ?>
</body>
</html>