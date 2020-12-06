<?php
$q = intval($_GET['q']);
session_start();
$_SESSION['checked_in_buissnes']=$q;

$con = mysqli_connect('localhost','root','root','gather-blocker');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

$sql2="SELECT `id`, `name`, `street`, `city`, `max-capacity`, `category`, `user-name`, `real-time` FROM `shops` WHERE `id`='$q'";

$result = mysqli_query($con,$sql2);
if (mysqli_num_rows($result)> 0) {
	$_SESSION['no_check_in']=true;

	$sql="UPDATE `shops` SET `real-time`=`real-time`+1 WHERE `id`='$q'";

if (mysqli_query($con, $sql)){
  
  echo "<h2 style='font-family:Baumans'>checked in successfully to shop with id: ".$q."</h2>";
} else {
  echo "Error updating record: " . mysqli_error($con);
}
  
  
  }
 else {
  $_SESSION['no_check_in']=false;
  echo "<h2 style='font-family:Baumans'>there is no shop with such id ,please press the check out button to proceed </h2>";
}




mysqli_close($con);
?>