<?php
session_start();
$q = intval($_GET['q']);
$n="no";
$Uname=$_SESSION['username'];

$con = mysqli_connect('localhost','root','root','admin');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}
$sql="UPDATE `workers` SET `buisness-name`='$q',`aproove`='$n' WHERE `user-name`='$Uname'";

if (mysqli_query($con, $sql)){
  
  echo "<h2 style='font-family:Baumans'>buisness successfully changed  to : ".$Uname."</h2>";
} else {
  echo "Error updating record: " . mysqli_error($con);
}
mysqli_close($con);


?>