
<?php
session_start();
$get_user = $_SESSION['username'];
$open=$_POST['open'];
$close=$_POST['close'];
echo $open."<br>".$close;


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



$sql = "UPDATE `shops` SET `opening`='$open',`closing`='$close' WHERE `user-name`='$get_user'";
if (mysqli_query($conn, $sql)) {
  echo "<h2>buisness/shop added sucssesfully!<h2>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header("Location:settings_manager.php");


?>










