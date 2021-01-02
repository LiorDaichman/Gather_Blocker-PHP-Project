<?php
session_start();
$q = intval($_GET['q']);

$get_Bname = $_SESSION["shopID"];

$con = mysqli_connect('localhost','root','root','admin');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}
$sql="UPDATE `shops` SET `real-time`='$q' WHERE `id`='$get_Bname'";

if (mysqli_query($con, $sql)){
  
  echo "<h2 style='font-family:Baumans'>manually inserted successfully to : ".$get_Bname."</h2>";
} else {
  echo "Error updating record: " . mysqli_error($con);
}
mysqli_close($con);


?>