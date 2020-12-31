<?php
session_start();
$q=intval($_SESSION['checked_in_buissnes']);
$_SESSION['insideB']=" ";

	
$con = mysqli_connect('localhost','root','root','admin');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}
$sql="UPDATE `shops` SET `real-time`=`real-time`-1 WHERE `id`='$q'";

if (mysqli_query($con, $sql)) {
  $_SESSION['checked_in']="no";
  echo "<h2 style='font-family:Baumans'>checked out successfully from shop with id: ".$q."</h2>";
} else {
  echo "Error updating record: " . mysqli_error($con);
}



mysqli_close($con);





?>