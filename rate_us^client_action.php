<?php
session_start();
$_SESSION['rated']=" ";
$user= $_SESSION['username'];
$rate=$_POST['rate'];
$servername = "localhost";
 $username = "root";
 $password = "root";
$dbname = "admin";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}


$sql2="INSERT INTO `ratings`(`id`, `user-name`, `rating`)
 VALUES (null,'$user','$rate')";
 $sql="SELECT `id`, `user-name`, `rating`
  FROM `ratings` WHERE  `user-name`='$user'";
 
               
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
$_SESSION['rated']="<h2 style='font-family:Baumans'>you have already voted</h2>";
}
else {
   if(mysqli_query($conn, $sql2)){
    $_SESSION['rated']="<h2 style='font-family:Baumans'>thanks for voteing</h2>";

   } 

}
header("Location:rate_us^client.php");


?>