<?php
session_start();
$get_name = $_POST['name'];
$get_city = $_POST['city'];
$get_street = $_POST['route'];
$get_streetNum = $_POST['street_number'];
$get_area = $_POST['administrative_area_level_1'];
$country = $_POST['country'];
$get_user = $_SESSION["username"];
$get_capacity = $_POST['capacity'];
$get_category = $_POST['category'];
$get_add = $_POST['location'];
$get_lat = $_POST['lat'];
$get_lng = $_POST['lng'];
$open=$_POST['open'];
$close=$_POST['close'];
$get_id=$_POST['ID'];

$get_city=str_replace("'","",$get_city);
$get_street=str_replace("'","",$get_street);

//Define the function to remove the spacial character



$get_add.=$get_street."
".$get_streetNum."
".$get_city."
".$get_area."
".$country;
echo $get_add;
$get_add=str_replace("'","",$get_add);




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

$sql = "UPDATE `shops` SET `name`='$get_name',`address`='$get_add',`city`='$get_city',`max-capacity`='$get_capacity',
`category`='$get_category',`user-name`='$get_user',`real-time`='0',`lat`='$get_lat',`lng`='$get_lng',`opening`='$open',`closing`='$close' WHERE `id`='$get_id'";
if (mysqli_query($conn, $sql)) {
  echo "<h2>buisness/shop updated sucssesfully!<h2>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header("Location:gather-ShopList_Manage.php");


?>
