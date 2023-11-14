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
<h1><a href="#.php" style="margin-left:35px;text-decoration:none;color:black;" ><img src="img/attendance.png" style="width:35px;margin-top:-5px;">&nbspAttendance</a></h1><hr>
<h1><a href="report.php" style="margin-left:35px;text-decoration:none;color:black;" ><img src="img/report.png" style="width:40px;margin-top:-5px;">&nbspReport</a></h1><hr>
<h1><a href="adminlogin.php" style="margin-left:30px;text-decoration:none;color:black;" ><img src="img/leave.png" style="width:40px;margin-top:-5px;">&nbspLogout</a></h1><hr>

</div>
<!-- End Header -->

<!-- Register table -->
<div style="margin-left:280px;margin-top:-780px;">
<h1 style="text-align:center;"><u>Students Attendance</u></h1>
<table class="table table-hovered" style="background-color:white;" id="myTable">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Status</th>
    <th>Date</th>
    <th>Action</th>
</tr>

<?php
      include("connect.php");

      $query="select * from attendance ";
      $result=mysqli_query($con,$query);

      if (mysqli_num_rows($result) > 0) {
      
      while ($row=mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>". $row['student_id'] . "</td>";
      echo "<td>". $row['student_name'] . "</td>";
      echo "<td>". $row['student_status'] . "</td>";
      echo "<td>". $row['attendance_date'] . "</td>";
      ?>
      <form method="post" action="">
      <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
      <td>
      <a href="#"><button class="btn btn-danger" name="delete" value="" onclick="return checkDelete()">Delete</button></a></form>&nbsp<a href="add.php"><button class="btn btn-success" name="add" value="">ADD</button></a>&nbsp<a href="edit.php"><button class="btn btn-primary" name="edit" value="">Edit</button></a></td>
      </form>
      <?php
      
           echo "</tr>";
        }
      }
      else{
        echo "<script>alert('Check your rollno and try again!');</script>";
      }
    mysqli_close($con);
?>
</table>
<?php
include("connect.php");

if (isset($_POST['delete'])) {
  $id=$_POST['id'];
  $query="delete from attendance where id='$id'";
  if (mysqli_query($con,$query)) {
    echo "<script>alert('Data deleted succesfully');</script>";
    ?>
    <meta http-equiv = "refresh" content="0; url = http://localhost/internship%20task/adminattendance.php" />
    <?php
  }
  else{
     echo "<script>alert('Something wrong!');</script>";
  }
}
?>
<script>
function checkDelete(){
  return confirm('Are you sure you want to delete this row ?');

}
  </script>
</body>
</html>