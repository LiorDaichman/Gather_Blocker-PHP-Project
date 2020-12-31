<?php
session_start();


$q=$_SESSION['MBID'];



$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "admin";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql2="UPDATE `shops` SET `real-time`=`real-time`-1 WHERE `id`='$q'";


		


if (mysqli_query($conn, $sql2)) {
	$_SESSION['insideBM']=" ";
  
  $_SESSION['checked_in']="no";
  echo "<h2 style='font-family:Baumans'>checked out successfully from shop with id:".$q."</h2>";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);





?>
