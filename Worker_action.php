<?php
$get_name = $_POST['first-name'];
$get_lname = $_POST['last-name'];
$get_user = $_POST['user-name'];
$get_pas = $_POST['password'];
$get_Bname = $_POST['buisness-name'];

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "gather-blocker";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}



$sql ="INSERT INTO `workers`(`id`, `first-name`, `last-name`, `buisness-name`, `user-name`, `password`) 
VALUES (null,'$get_name','$get_lname ','$get_Bname','$get_user','$get_pas')";
if (mysqli_query($conn, $sql)) {
  echo "<h2>signed up sucssesfully!<h2>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);



?>