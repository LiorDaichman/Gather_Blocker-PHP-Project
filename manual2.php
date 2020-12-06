<?php
session_start();
$q = intval($_GET['q']);

$get_Bid = $_SESSION['bID'];

$con = mysqli_connect('localhost','root','root','gather-blocker');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}
$sql="UPDATE `shops` SET `real-time`='$q' WHERE `id`='$get_Bid'";

if (mysqli_query($con, $sql)){
  
  echo "<h2 style='font-family:Baumans'>manually inserted successfully to : ".$_SESSION['bID']."</h2>";
} else {
  echo "Error updating record: " . mysqli_error($con);
}
mysqli_close($con);


?>