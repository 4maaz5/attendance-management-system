<?php
require_once 'connect.php';

$student_id=$_POST['student_id'];
$student_name=$_POST['student_name'];
$student_status=$_POST['student_status'];

$date=date("m-d-y");

$query="select * from attendance where student_id='$student_id' AND attendance_date='$date'";
$result=mysqli_query($con,$query);

if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('Attendance already marked for today');</script>";
}
else{
    $insert_query="insert into attendance (student_id,student_name,student_status,attendance_date) values ('$student_id','$student_name','$student_status','$date')";
    
    if (mysqli_query($con,$insert_query)) {
        echo "<script>alert('Attendance marked successfully');</script>";
    }
    else{
        echo "<script>alert('Error marking attendance');</script>".mysqli_error($con);
    }
}
mysqli_close($con);
?>

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
</div>
<br><br>
<!-- End Header -->
         <section>
         <h1 style="text-align:center;"><b>Students Attendance &nbsp<?php echo "(".date("y-m-d").")";?></b></h1>
         <table class="table table-bordered" style="background-color:white;">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>RollCall</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
<?php
     include("connect.php");
     
     $query="select * from attendance";
     $result=mysqli_query($con,$query);
     $row=mysqli_fetch_assoc($result);

      if (mysqli_num_rows($result)>0) {
      
      while ($row=mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['student_id'] . "</td>";
    echo "<td>". $row['student_name'] . "</td>";
    echo "<td>". $row['student_status'] . "</td>";
    echo "<td>". $row['attendance_date'] . "</td>";
   echo "</tr>";
        }
      }
      else{
        echo "<script>alert('Check your rollno and try again!');</script>";
      }
    mysqli_close($con);
?>
</body>
    </table><br>
</body>
</html>