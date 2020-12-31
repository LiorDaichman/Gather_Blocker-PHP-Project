



<?php
session_start();
$get_user = $_SESSION['username'];
$get_name = $_POST['first-name'];
$get_lname = $_POST['last-name'];
$get_user2 = $_POST['user-name'];
$get_pas = $_POST['password'];
$get_pas_confirm=$_POST['password-confirm'];

echo $get_user2."<br>";
echo $get_name."<br>";
echo $get_lname."<br>";
echo $get_user."<br>";
echo $get_pas."<br>";



$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "admin";

// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$sql="UPDATE `managers` SET `first-name`='$get_name',`last-name`='$get_lname',`user-name`='$get_user2',`password`='$get_pas' WHERE `user-name`='$get_user'";

if (mysqli_query($conn, $sql)) {
	$_SESSION['detailchanged']="details changed sucssesfully";
	$_SESSION['username']=$get_user2;
	$_SESSION['detailshow']=1;
  echo "<h2>signed up sucssesfully!<h2>";
} else {
	$_SESSION['detailchanged']="eror changing data";
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header("Location:gather-app-manager.php");
?>
