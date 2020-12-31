<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<style>
table {
  width: 40%;
  margin:auto;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: center;
background-color: #ADFF2F;}
tr:nth-child(even){background-color: #FFFACD;}
tr:nth-child(odd){background-color: #FFFACD;}

.checkbutton{
 background-color: #3CBC8D;
  border: none;
  color: white;
  padding: 8px 16px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  border: 2px solid grey;
   border-radius: 4px;
   align:center;	
	
}
.fffe{
  border: 2px solid grey;
   background-color: #3CBC8D;
  color: white;
  border-radius: 4px;
  padding: 4px 8px;}
@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {
    .checkbutton{
 background-color: #3CBC8D;
  border: none;
  color: white;
  padding: 4px 8px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  border: 2px solid grey;
   border-radius: 4px;
   align:center;	
	
}
.fffe{
  border: 2px solid grey;
   background-color: #3CBC8D;
  color: white;
  border-radius: 4px;
  padding: 4px 8px;}
   
}
</style>
</head>
<body>
<?php

session_start();


$get_id=$_SESSION["shopID"];
$get_user=$_SESSION['username'];
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

$sql="SELECT `id`, `name`, `address`, `city`, `max-capacity`, `category`, `user-name`,`real-time` FROM `shops` WHERE `user-name`='$get_user'";


$sql2="SELECT `id`, `first-name`, `last-name`, `buisness-name`, `user-name`, `password` ,`aproove` FROM `workers` WHERE `buisness-name` = '$get_id'";


  $result = mysqli_query($conn, $sql);
  
  if (mysqli_num_rows($result) > 0) {
    echo "<h2>workers list!<h2>";
    echo "<table>
    <tr>
    
    <th>buisness-id</th>
    <th>first-name</th>
    <th>last-name</th>
    <th>aprooved</th>
    <th>confirm</th>
    </tr>";

    $ar=array(); 
  while($row = mysqli_fetch_array($result)) {

array_push($ar,$row['id']);   
  }


    
  foreach ($ar as $value) {
    $get_id=$value;
    $sql2="SELECT `id`, `first-name`, `last-name`, `buisness-name`, `user-name`, `password` ,`aproove` FROM `workers` WHERE `buisness-name` = '$get_id'";
    $result = mysqli_query($conn, $sql2);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)) {
            echo "<tr>";
           
            echo "<td>" . $row['buisness-name'] . "</td>";
             echo "<td>" . $row['first-name'] . "</td>";
             echo "<td>" . $row['last-name'] . "</td>";
             echo "<td>" . $row['aproove'] . "</td>";
             if($row['aproove']=='no'){echo "<td><p align:'center'><button class='fffe' onclick='aprooveW(this.value)' name='subject' value=".$row['user-name'].">aproove:".$row['user-name']."</button></p></td>";
             }
             else {echo "<td><p align:'center'><button class='fffe' onclick='disaprooveW(this.value)' name='subject' value=".$row['user-name'].">disaproove:".$row['user-name']."</button></p></td>";}
             echo "</tr>";


        }
}


}
}
else {
  echo "0 results";
}



mysqli_close($conn);




?>


</body>
</html>