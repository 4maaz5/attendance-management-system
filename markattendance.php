<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Attendance</title>
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
        <div style="margin-top:-40px;margin-top:-45px;">
     <a href="index.php" style="text-decoration:none; font-size:20px;color:black;margin-left:850px;margin-top:100px;"><b>Home</b></a>&nbsp&nbsp 
     <a href="#" style="text-decoration:none; font-size:20px;color:black;margin-top:100px;"><b>Attendance</b></a>&nbsp&nbsp 
     <a href="markleave.php" style="text-decoration:none; font-size:20px;color:black;margin-top:100px;"><b>Leave</b></a>&nbsp&nbsp 
     <a href="viewrecord.php" style="text-decoration:none; font-size:20px;color:black;margin-top:100px;"><b>Record</b></a> &nbsp&nbsp 
     <a href="adminlogin.php" style="text-decoration:none; font-size:20px;color:black;margin-top:100px;margin-left:50px;border:solid 2px;padding:5px;"><b>Admin panel</b></a> &nbsp&nbsp
</div>
</div>
<br><br>
<!-- End Header -->
<div class="attendance_form"  style="border:solid 2px;width:650px; height:250px;">
<center><h1>Mark Student Attendance</h1></center><br>
<form method="post" action="markedattendance.php">
  <label for="student_id">Student ID</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <input type="text" id="student_id" name="student_id" required>
  <label for="student_id">Student Name</label>
  <input type="text" id="student_id" name="student_name" required><br><br>
  <label for="student_id">Student Status</label>
  <input type="text" id="student_id" value="Present" name="student_status" readonly required><br><br>
  <input type="submit" value="Mark Attendance" style="margin-left:105px;">
</form>
</div>
</body>
</html>