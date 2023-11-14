<?php
require_once 'connect.php';

if (isset($_POST['submit'])) {
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $jobtitle=$_POST['jobtitle'];
    $number=$_POST['number'];
    $email=$_POST['email'];
    $reason=$_POST['reason'];
    $date=$_POST['date'];

    $sql="insert into leavetable (fname,lname,jobtitle,number,email,reason,date,action) values('$fname','$lname','$jobtitle','$number','$email','$reason','$date','Waiting.....')";
    mysqli_query($con,$sql);

    if (mysqli_query($con,$sql)) {
        echo "<script>alert('Leave application submitted Successfully');</script>";
    }
    else{
        echo "<script>alert('Error!');</script>";
    }
}

//mysqli_close($con);
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
        <h1 id="name"><img src="img/logo.jpeg" style="width:70px;margin-top:-5px;">&nbspAttendance Management System </h1>
        <div style="margin-top:-45px;">
     <a href="index.php" style="text-decoration:none; font-size:20px;color:black;margin-left:850px;margin-top:100px;"><b>Home</b></a>&nbsp&nbsp 
     <a href="markattendance.php" style="text-decoration:none; font-size:20px;color:black;margin-top:100px;"><b>Attendance</b></a>&nbsp&nbsp 
     <a href="#" style="text-decoration:none; font-size:20px;color:black;margin-top:100px;"><b>Leave</b></a>&nbsp&nbsp 
     <a href="viewrecord.php" style="text-decoration:none; font-size:20px;color:black;margin-top:100px;"><b>Record</b></a> &nbsp&nbsp 
     <a href="adminlogin.php" style="text-decoration:none; font-size:20px;color:black;margin-top:100px;margin-left:50px;border:solid 2px;padding:5px;"><b>Admin panel</b></a> &nbsp&nbsp
</div>
</div>
<br>
<!-- End Header -->
<div class="form">
    <br><br>
    <center><h1>Leave Application Form</h1></center><hr>
    <form method="post" action="">
        <input type="text" class="form-control" placeholder="FirstName" id="input" name="fname" require>
        <input type="text" class="form-control" placeholder="LastName" id="input1" name="lname" require><br>
        <input type="text" class="form-control" placeholder="JobTitle" id="input2" name="jobtitle" require>
        <input type="number" class="form-control" placeholder="phone" id="input3" name="number" require><br>
        <input type="email" class="form-control" placeholder="email" id="input4" name="email" require><br>
        <h4>Reason</h4>
        <textarea id="input5" name="reason"></textarea><br><br>
        <input type="date" class="form-control" placeholder="LastName" id="input6" name="date" require><br>
        <input type="submit" class="btn btn-primary" name="submit" placeholder="LastName" id="submit">
</div>
        <br><br><br><br><br><hr>
        <h1 style="text-align:center;">Leave Approval</h1>
<table class="table table-hovered" style="background-color:white;">
  <tr>
  <th>ID</th>
    <th>Name</th>
    <th>phone</th>
    <th>email</th>
    <th>Date</th>
    <th>Response</th>
</tr>
<?php
     $select="select * from leavetable";
     $result=mysqli_query($con, $select);
     
     while ($row=mysqli_fetch_assoc($result)) {?>
        <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['fname']; ?></td>
    <td><?php echo $row['number'];?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['date']; ?></td>
    <td><?php echo $row['action']; ?></td>
    <td>
                  </tr>
                  <?php } ?>
</table>
<?php mysqli_close($con); ?>
</table>
<br><br>
</body>
</html>