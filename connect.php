<?php
$server="localhost";
$username="root";
$password="";
$db="internship_task";

$con=mysqli_connect("$server","$username","$password","$db");

if (!$con) {
    die("connection Failed".mysqli_connect_error);
}
else
{
	//echo "Connected successfully";
}
?>