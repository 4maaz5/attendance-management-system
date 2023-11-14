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
        <h1 id="name"><img src="img/logo.jpeg" style="width:70px;margin-top:-5px;">&nbspAttendance Management System </h1>
        <div style="margin-top:-45px;">
     <a href="index.php" style="text-decoration:none; font-size:20px;color:black;margin-left:850px;margin-top:100px;"><b>Home</b></a>&nbsp&nbsp 
     <a href="markattendance.php" style="text-decoration:none; font-size:20px;color:black;margin-top:100px;"><b>Attendance</b></a>&nbsp&nbsp 
     <a href="markleave.php" style="text-decoration:none; font-size:20px;color:black;margin-top:100px;"><b>Leave</b></a>&nbsp&nbsp 
     <a href="#" style="text-decoration:none; font-size:20px;color:black;margin-top:100px;"><b>Record</b></a> &nbsp&nbsp 
     <a href="adminlogin.php" style="text-decoration:none; font-size:20px;color:black;margin-top:100px;margin-left:50px;border:solid 2px;padding:5px;"><b>Admin panel</b></a> &nbsp&nbsp
</div>
</div>
<br><br>
<!-- End Header -->

<div class="attendance_form"  style="border:solid 2px;width:650px; height:250px;margin-left:280px;">
<center><h1>Mark Student Attendance</h1></center><br>
<form method="post" action="">
  <label for="student_id">Student ID</label>
  <input type="text" id="student_id" name="student_id" required>
  <label for="student_id">Student Name</label>
  <input type="text" id="student_id" name="student_name" required><br><br>
  <input type="submit" value="Show Attendance" name="submit" style="margin-left:77px;width:190px;">
</form>
</div>
<br>
<table class="table table-hovered" style="background-color:white;">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>RollCall</th>
    <th>Date</th>
</tr>
<?php
include("connect.php");

      if (isset($_POST['submit'])) {
      $student_id=$_POST['student_id'];
      $student_name=$_POST['student_name'];
      
      $query="select * from attendance where student_id='$student_id' AND student_name='$student_name'";
      $result=mysqli_query($con,$query);

      if (mysqli_num_rows($result) > 0) {
      
      while ($row=mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>". $row['student_id'] . "</td>";
    echo "<td>". $row['student_name'] . "</td>";
    echo "<td>". $row['student_status'] . "</td>";
    echo "<td>". $row['attendance_date'] . "</td>";
    echo "</tr>";
        }
      }
      else{
        echo "<script>alert('Check your rollno and try again!');</script>";
      }
    }
    mysqli_close($con);
?>
</table>
</body>
</html>