
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
        <h1 id="name">Attendance Management System </h1>
</div>
<br><br>
<!-- End Header -->
<div class="attendance_form"  style="border:solid 2px;width:650px; height:250px;">
<center><h1>Edit Student Attendance</h1></center><br>
<form method="post" action="">
  <label for="student_id">Student ID</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <input type="text" id="student_id" name="student_id" required>
  <label for="student_id">Student Name</label>
  <input type="text" id="student_id" name="student_name" required><br><br>
  <label for="student_id">Student Status</label>
  <input type="text" id="student_id" value="Present" name="student_status" required><br><br>
  <input type="submit" value="Update data" style="margin-left:105px;" name="edit">
</form>
</div>

<?php
require_once 'connect.php';
 
    //$idd=$_POST['id'];

    if(isset($_POST['edit'])){
    $id=$_POST['student_id'];
    $name=$_POST['student_name'];
    $status=$_POST['student_status'];
    
  $check_query="select * from attendance ";

  $result=mysqli_query($con,$check_query);
  if (mysqli_num_rows($result) > 0) {

    $query="UPDATE attendance SET student_name='$name', student_status='$status' WHERE student_id='$id'";
  
    if (mysqli_query($con,$query)) {
      echo "<script>alert('Data is updated');</script>";
    }
    else{
      echo "<script>alert('Something wrong!');</script>";
    }
    }
    else{
      echo "<script>alert('Id not found!');</script>".mysqli_error($con);
    }
  }
  mysqli_close($con);
?>

</body>
</html>