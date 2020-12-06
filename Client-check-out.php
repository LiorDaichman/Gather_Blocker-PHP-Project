<?php
session_start();
$q=intval($_SESSION['checked_in_buissnes']);

if(  $_SESSION['no_check_in']==true){
	
$con = mysqli_connect('localhost','root','root','gather-blocker');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}
$sql="UPDATE `shops` SET `real-time`=`real-time`-1 WHERE `id`='$q'";

if (mysqli_query($con, $sql)) {
  
  echo "<h2 style='font-family:Baumans'>checked out successfully to shop with id: ".$q."</h2>";
} else {
  echo "Error updating record: " . mysqli_error($con);
}



mysqli_close($con);

}
else {echo "<h2 style='font-family:Baumans'>there is no shop with such id</h2>";}


?>