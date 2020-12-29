<?php
session_start();
$q = intval($_GET['q']);
$B= $_POST['ID'];
$C = $_POST['count'];

$_SESSION['bID']=$B;
$_SESSION['updated']=" ";
$con = mysqli_connect('localhost','root','root','admin');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}
$sql="UPDATE `shops` SET `real-time`='$C' WHERE `id`='$B'";

if (mysqli_query($con, $sql)){
  
  echo "<h2 style='font-family:Baumans'>manually inserted successfully to shop with id: ".$B."</h2>";
  header("Location:gather-app-manager.php");
  $_SESSION['updated']="updated successfully";
} 

else {
	 $_SESSION['updated']="error update failed! ";
  echo "Error updating record: " . mysqli_error($con);
}
mysqli_close($con);


?>