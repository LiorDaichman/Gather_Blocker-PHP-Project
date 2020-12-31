<?php
session_start();
$q = $_GET['q'];
$ap="yes";
$con = mysqli_connect('localhost','root','root','admin');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}
$sql="UPDATE `workers` SET `aproove`='$ap' WHERE `user-name`='$q'";


if (mysqli_query($con, $sql)){
  
  echo "<h2 style='font-family:Baumans'>".$q."aprooved successfully</h2>";
  $_SESSION['aprooved']=$q."aprooved successfully";
} 

else {
	 $_SESSION['updated']="error update failed! ";
  echo "Error updating record: " . mysqli_error($con);
}
mysqli_close($con);


?>