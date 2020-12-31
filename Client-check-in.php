<?php
$q = intval($_GET['q']);
session_start();
$_SESSION['checked_in_buissnes']=$q;

$con = mysqli_connect('localhost','root','root','admin');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

$sql2="SELECT `id`, `name`, `address`, `city`, `max-capacity`, `category`, `user-name`, `real-time` FROM `shops` WHERE `id`='$q'";

$sql="UPDATE `shops` SET `real-time`=`real-time`+1 WHERE `id`='$q'";



if (mysqli_query($con, $sql)){
    $_SESSION['checked_in']="yes";
  echo "<h2 style='font-family:Baumans'>checked in successfully to shop with id: ".$q."</h2>";
} else {
  echo "Error updating record: " . mysqli_error($con);
}

$result = mysqli_query($con,$sql2);
if (mysqli_num_rows($result)> 0) {
	$row = mysqli_fetch_array($result); 
	$_SESSION['insideB']=$row['name'];
}
 



mysqli_close($con);
?>
