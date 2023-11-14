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
<h1><a href="leaveapproval.php" style="margin-left:35px;text-decoration:none;color:black;" ><img src="img/application.png" style="width:40px;margin-top:-5px;">&nbspApplications</a></h1><hr>
<h1><a href="adminattendance.php" style="margin-left:35px;text-decoration:none;color:black;" ><img src="img/attendance.png" style="width:35px;margin-top:-5px;">&nbspAttendance</a></h1><hr>
<h1><a href="#" style="margin-left:35px;text-decoration:none;color:black;" ><img src="img/report.png" style="width:40px;margin-top:-5px;">&nbspReport</a></h1><hr>
<h1><a href="adminlogin.php" style="margin-left:30px;text-decoration:none;color:black;" ><img src="img/leave.png" style="width:40px;margin-top:-5px;">&nbspLogout</a></h1><hr>
</div>

<!-- End Header -->

<div class="attendance_form"  style="border:solid 2px;width:650px; height:250px;margin-left:470px;margin-top:-760px;">
<center><h1>Attendance Report</h1></center><br>
<form method="post" action="">
  <label for="student_id">Student ID</label>
  <input type="text" id="student_id" name="id" required>
  <label for="student_id">Student Name</label>
  <input type="text" id="student_id" name="name" required><br><br>
  <label for="student_id">FromDate</label>
  <input type="date" id="student_id" name="from" required style="width:200px;height:30px;margin-left:2px;">
  <label for="student_id" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspToDate</label>
  <input type="date" id="student_id" name="to" required style="width:200px;height:30px;margin-left:13px;"><br><br>
  <input type="submit" value="Generate Report" name="submit" style="margin-left:77px;width:200px;">
</form>
</div><br>
<div style="width:455px;margin-left:570px;height:430px;background-color:white;">
<table class="table table-hovered" style="background-color:white;">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Status</th>
    <th>Date</th>
</tr>

<?php
include("connect.php");

      if (isset($_POST['submit'])) {
      $id=$_POST['id'];
      $name=$_POST['name'];
      $fromdate=date('m-d-y',strtotime($_POST['from']));
      $todate=date('m-d-y',strtotime($_POST['to']));

      $query="select * from attendance where student_id = '$id' AND student_name = '$name' AND attendance_date >= '$fromdate' AND attendance_date <= '$todate'";
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
        echo "<script>alert('No Record found!');</script>".mysqli_error($con);;
      }
    }
    mysqli_close($con);
?>
</table>
  </div>
  <div class="attendance_form"  style="border:solid 2px;width:650px; height:250px;margin-left:330px;margin-top:60px;">
<center><h1>Detailed Reports</h1></center><br>
<form method="post" action="">
  <label for="student_id">Student ID</label>
  <input type="text" id="student_id" name="id" required>
  <label for="student_id">Student Name</label>
  <input type="text" id="student_id" name="name" required><br><br>
  <label for="student_id">FromDate</label>
  <input type="date" id="student_id" name="from" required style="width:200px;height:30px;margin-left:2px;">
  <label for="student_id" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspToDate</label>
  <input type="date" id="student_id" name="to" required style="width:200px;height:30px;margin-left:13px;"><br><br>
  <input type="submit" value="Detailed Reports" name="submit" style="margin-left:77px;width:200px;">
</form>
</div><br>

<div style="width:655px;margin-left:325px;height:430px;background-color:white;">
<table class="table table-bordered" style="background-color:white;">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>TotalClasses</th>
    <th>Present</th>
    <th>Absent</th>
    <th>Leaves</th>
    <th>Grade</th>
    <th>FromDate</th>
    <th>ToDate</th>
</tr>

<?php
include("connect.php");

      if (isset($_POST['submit'])) {
      $id=$_POST['id'];
      $name=$_POST['name'];
      $fromdate=date('m-d-y',strtotime($_POST['from']));
      $todate=date('m-d-y',strtotime($_POST['to']));

      $query="select * from attendance where student_id = '$id' AND student_name = '$name' AND attendance_date >= '$fromdate' AND attendance_date <= '$todate'";
      $result=mysqli_query($con,$query);

      $presentDays=0;
      $absentDays=0;
      $leaveDays=0;
  
      while ($row=mysqli_fetch_assoc($result)) {
        if ($row['student_status'] == 'Present') {
           $presentDays++;
        }
        elseif($row['student_status'] == 'Absent'){
          $absentDays++;
        }
        elseif($row['student_status'] == 'Leave'){
          $leaveDays++;
        }
      }
      $grade = '';

      //$presentDays=20;
      //$absentDays=9;

      if ($presentDays >= 25) {
        $grade='A';
      }
      elseif($presentDays >= 20){
        $grade='B';
      }
      elseif($presentDays >= 15){
        $grade='C';
      }
      elseif($presentDays >= 10){
        $grade='D';
      }
      elseif($presentDays >= 5){
        $grade='E';
      }
      elseif($presentDays >= 0){
        $grade='F';
      }
    $total=30;

    echo "<tr>";
    echo "<td>". $id . "</td>";
    echo "<td>". $name . "</td>";
    echo "<td>". $total . "</td>";
    echo "<td>". $presentDays . "</td>";
    echo "<td>". $absentDays . "</td>";
    echo "<td>". $leaveDays . "</td>";
    echo "<td>". $grade . "</td>";
    echo "<td>". $fromdate . "</td>";
    echo "<td>". $todate . "</td>";
    echo "</tr>";  
    }
    mysqli_close($con);
?>
</table-->
</body>
</html>