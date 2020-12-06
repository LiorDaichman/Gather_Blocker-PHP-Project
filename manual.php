<?php
session_start();
$q = intval($_GET['q']);

$get_Bname = $_SESSION["workerBuisness"];

$con = mysqli_connect('localhost','root','root','gather-blocker');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}
$sql="UPDATE `shops` SET `real-time`='$q' WHERE `name`='$get_Bname'";

if (mysqli_query($con, $sql)){
  
  echo "<h2 style='font-family:Baumans'>manually inserted successfully to : ".$get_Bname."</h2>";
} else {
  echo "Error updating record: " . mysqli_error($con);
}
mysqli_close($con);


?>