


<?php
session_start();
$bName=$_SESSION['workerBuisness'];



$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "gather-blocker";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql="UPDATE `shops` SET `real-time`=`real-time`+1 WHERE `name`='$bName'";

		


if (mysqli_query($conn, $sql)) {
  
  echo "<h2 style='font-family:Baumans'>checked in successfully</h2>";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);





?>


