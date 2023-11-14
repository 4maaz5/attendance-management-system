<?php

include("connect.php");

if (isset($_POST['accept'])) {
  $row_id=$_POST['id'];

  $update="UPDATE leavetable SET action='Accepted' WHERE id='$row_id'";
  mysqli_query($con, $update);
   if($row_id=$_POST['id']) {
    echo "<script>alert('Application Accepted');</script>";
  }
  else{
    echo "<script>alert('Error Updating Row');</script>".mysqli_error($con);
  }
}

if (isset($_POST['reject'])) {
  $row_id=$_POST['id'];

  $update="UPDATE leavetable SET action='Rejected' WHERE id='$row_id'";
  mysqli_query($con, $update);
   if($row_id=$_POST['id']) {
    echo "<script>alert('Application Rejected');</script>";
  }
  else{
    echo "<script>alert('Kindly enter row ID');</script>".mysqli_error($con);
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

<body>
<div class="container">
    <div class=" row" id="namee" style="width: 1770px;margin-left: -240px;">
        <h1 id="name"><img src="img/logo.jpeg" style="width:70px;margin-top:-5px;">&nbsp&nbspAttendance Management System <!--a href="#">Attendance</a><a href="#">Leave</a--><a href="adminlogin.php" id="admin" style="margin-left:770px;">Logout</a></h1>
        <h5 style="margin-left:330px;margin-top:20px;"><b>Dashboard || Attendance</b></h5>
      </div>
<div style="width:340px;height:800px;background-color:white;opacity:80%;margin-left:-240px;">
<br>
<h1 style="margin-left:20px;"><img src="img/icon top1.jpg" style="width:70px;margin-top:-5px;">Dashboard</h1>
<hr>
<h1><a href="adminpage.php" style="margin-left:35px;text-decoration:none;color:black;" ><img src="img/users.png" style="width:40px;margin-top:-5px;">&nbsp&nbspUsers</a></h1><hr>
<h1><a href="#" style="margin-left:35px;text-decoration:none;color:black;" ><img src="img/application.png" style="width:40px;margin-top:-5px;">&nbspApplications</a></h1><hr>
<h1><a href="adminattendance.php" style="margin-left:35px;text-decoration:none;color:black;" ><img src="img/attendance.png" style="width:35px;margin-top:-5px;">&nbspAttendance</a></h1><hr>
<h1><a href="report.php" style="margin-left:35px;text-decoration:none;color:black;" ><img src="img/report.png" style="width:40px;margin-top:-5px;">&nbspReport</a></h1><hr>
<h1><a href="adminlogin.php" style="margin-left:30px;text-decoration:none;color:black;" ><img src="img/leave.png" style="width:40px;margin-top:-5px;">&nbspLogout</a></h1><hr>

</div>
<!-- End Header -->


<!-- leave approval table-->
<div style="margin-left:180px;margin-top:-780px;">
        <h1 style="text-align:center;"><u>Leave Approval</u></h1>
<table class="table table-bordered" style="background-color:white;">
  <tr>
  <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Reason</th>
    <th>Phone</th>
    <th>Date</th>
    <th>Response</th>
    <th>EnterId</th>
    <th>Action</th>
</tr>

     <?php
     $select="select * from leavetable";
     $result=mysqli_query($con, $select);
     
     while ($row=mysqli_fetch_assoc($result)) {?>
        <tr>
    <td><?php echo $row['id'];?></td>
    <td><?php echo $row['fname']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['reason'];?></td>
    <td><?php echo $row['number'];?></td>
    <td><?php echo $row['date']; ?></td>
    <td><?php echo $row['action']; ?></td>
    <td>
      <form method="post" action="">
      <input type="text" name="id">
      <td><button class="btn btn-success" type="submit" name="accept" value="Accept">Accept</button>&nbsp<button class="btn btn-danger" name="reject" value="">Reject</button></form>
      </td>
            </tr>
      <?php } ?>
</table>
<?php mysqli_close($con); ?>
</body>
</html>