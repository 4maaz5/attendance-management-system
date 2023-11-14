<?php
include("connect.php");

    $username=$_POST["username"];
    $password=$_POST["password"];

    $username=stripcslashes($username);
    $password=stripcslashes($password);

    $username=mysqli_real_escape_string($con,$username);
    $password=mysqli_real_escape_string($con,$password);

    $query="select * from adminlogin where username = '$username' and password = '$password'";
    $result=mysqli_query($con,$query);
    
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count=mysqli_num_rows($result);

    if ($count==1) {
      echo "<script>alert('Well Come!');</script>";
    }
    else{
      header("location:adminlogin.php");       
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

<body>
<div class="container">
    <div class=" row" id="namee" style="width: 1770px;margin-left: -240px;">
        <h1 id="name"><img src="img/logo.jpeg" style="width:70px;margin-top:-5px;">&nbsp&nbspAttendance Management System <a href="adminlogin.php" id="admin" style="margin-left:750px;"style="margin-left:460px;">Logout</a></h1>
        <h5 style="margin-left:330px;margin-top:20px;"><b>Dashboard || Attendance</b></h5>
</div>
<div style="width:340px;height:800px;background-color:white;opacity:80%;margin-left:-240px;">
<br>
<h1 style="margin-left:20px;"><img src="img/icon top1.jpg" style="width:70px;margin-top:-5px;">Dashboard</h1>
<hr>
<h1><a href="#" style="margin-left:35px;text-decoration:none;color:black;" ><img src="img/users.png" style="width:40px;margin-top:-5px;">&nbsp&nbspUsers</a></h1><hr>
<h1><a href="leaveapproval.php" style="margin-left:35px;text-decoration:none;color:black;" ><img src="img/application.png" style="width:40px;margin-top:-5px;">&nbspApplications</a></h1><hr>
<h1><a href="adminattendance.php" style="margin-left:35px;text-decoration:none;color:black;" ><img src="img/attendance.png" style="width:35px;margin-top:-5px;">&nbspAttendance</a></h1><hr>
<h1><a href="report.php" style="margin-left:35px;text-decoration:none;color:black;" ><img src="img/report.png" style="width:40px;margin-top:-5px;">&nbspReport</a></h1><hr>
<h1><a href="adminlogin.php" style="margin-left:30px;text-decoration:none;color:black;" ><img src="img/leave.png" style="width:40px;margin-top:-5px;">&nbspLogout</a></h1><hr>
</div>

<!-- End Header -->
<div style="margin-left:280px;margin-top:-750px;">
<h1 style="text-align:center;"><u>Registered Users</u></h1>
<table class="table table-hovered" style="background-color:white;">
  <tr>
    <th>ID</th>
    <th>Email</th>
    <th>Password</th>
</tr>

<?php
include("connect.php");

      $query="select * from register ";
      $result=mysqli_query($con,$query);

      if (mysqli_num_rows($result)>0) {
      
      while ($row=mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>". $row['id'] . "</td>";
    echo "<td>". $row['username'] . "</td>";
    echo "<td>". $row['password'] . "</td>";
    echo "</tr>";
        }
      }
      else{
        //echo "<script>alert('Check your rollno and try again!');</script>";
      }
    mysqli_close($con);
?>
</table>
    </div>
<br><br>
</body>
</html>