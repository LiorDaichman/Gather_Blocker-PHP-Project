


<?php
session_start();
$bName=$_SESSION['MBID'];

$q = $_GET['q'];


$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "admin";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql="UPDATE `shops` SET `real-time`=`real-time`+1 WHERE `id`='$bName'";

$sql2="UPDATE `shops` SET `real-time`=`real-time`-1 WHERE `id`='$bName'";		

if($q=='2'){
if (mysqli_query($conn, $sql)) {
      
	  echo "<p align='center' id='foo' style='font-size: 24px; color:#3CBC8D;'>guest update succseed to : ".$_SESSION['insideBM']."<br>
	  <i class='fas fa-check-square'></i></p>";
  
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

}
else if($q=='-'){
if (mysqli_query($conn, $sql2)) {
       echo "<p align='center'id='foo' style='font-size: 24px; color: red;'>guest update succseed to : ".$_SESSION['insideBM']."<br>
	   <i class='fas fa-check-square'></i></p>";
  
} else {
  echo "Error updating record: " . mysqli_error($conn);
}
}


mysqli_close($conn);





?>


