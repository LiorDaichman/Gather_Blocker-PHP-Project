<?php
session_start();
$q = intval($_GET['q']);

$_SESSION['MBID']=$q;



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

$sql="UPDATE `shops` SET `real-time`=`real-time`+1 WHERE `id`='$q'";

$sql2="SELECT `id`, `name`, `address`, `city`, `max-capacity`, `category`, `user-name`,`real-time` FROM `shops` WHERE `id`='$q'";		


if (mysqli_query($conn, $sql)) {
	$_SESSION['checked_in']="yes";
  
  echo "<h2 style='font-family:Baumans'>checked in successfully to shop".$q."</h2>";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

$result = mysqli_query($conn, $sql2);

if (mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_array($result); 
	$_SESSION['insideBM']=$row['name'];
	
	
}

mysqli_close($conn);





?>

