


<?php
session_start();
$bName=$_SESSION['workerBuisness'];

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

$sql="UPDATE `shops` SET `real-time`=`real-time`+1 WHERE `name`='$bName'";

$sql2="UPDATE `shops` SET `real-time`=`real-time`-1 WHERE `name`='$bName'";		

if($q=="2"){
if (mysqli_query($conn, $sql)) {
      
	  echo "<p align='center' id='foo' style='font-size: 24px; color:#3CBC8D;'>guest update succseed to : ".$_SESSION['workerBuisness']."<br>";
  
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

}
else if($q=="-"){
if (mysqli_query($conn, $sql2)) {
        echo "<p align='center' id='foo' style='font-size: 24px; color:tomato;'>guest update succseed to : ".$_SESSION['workerBuisness']."<br>";
  
  
} else {
  echo "Error updating record: " . mysqli_error($conn);
}
}


mysqli_close($conn);





?>


