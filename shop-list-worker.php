

<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<style>
table {
  width: 100%;
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
@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

	/* Force table to not be like tables anymore */
	table, thead, tbody, th, td, tr { 
		display: block; 
	}
	
	/* Hide table headers (but not display: none;, for accessibility) */
	th{display:none;}
	
	tr { border: 1px solid #111; }
	
	td { 
		/* Behave  like a "row" */
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
	}
	
	td:before { 
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 6px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
	}
	
	/*
	Label the data
	*/
    td:nth-of-type(1):before { content: "id:"; }
	td:nth-of-type(2):before { content: "name:"; }
	td:nth-of-type(3):before { content: "address:"; }
    td:nth-of-type(4):before { content: "opening-hours:"; }
	td:nth-of-type(5):before { content: "city:"; }
	td:nth-of-type(6):before { content: "max-capacity:"; }
	td:nth-of-type(7):before { content: "category:"; }
	td:nth-of-type(8):before { content: "real-time:"; }
	td:nth-of-type(9):before { content: "external line:"; }
	td:nth-of-type(10):before { content: "occupation(%):"; }
	td:nth-of-type(11):before { content: "check in:"; }
	
}
</style>
</head>
<body>
<?php

session_start();

function check_occupation($real_time,$max_capacity) {
  $sum= (100*$real_time) / $max_capacity;
  return $sum;
}
$get_shop=$_SESSION["workerBuisness"];
$get_id = $_SESSION["shopID"];
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
$sql="SELECT `id`, `name`, `address`, `city`, `max-capacity`, `category`, `user-name`,`real-time`, TIME_FORMAT(`opening`, '%h:%i%p') `opening`,TIME_FORMAT(`closing`, '%h:%i%p') `closing` FROM `shops` WHERE `id`='$get_id'";



if (mysqli_query($conn, $sql)) {
  echo "<h2>shop list!<h2>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	echo "results for user name:".$get_user."<br>";
	
echo "<table>
<tr>
<th>id</th>
<th>name</th>
<th>address</th>
<th>opening-hours</th>
<th>city</th>
<th>max-capacity</th>
<th>category</th>
<th>real-time</th>
<th>external line</th>
<th>occupation(%)</th>
<th>check in</th>
</tr>";
if($_SESSION['checked_in']!="yes"){
while($row = mysqli_fetch_array($result)) {
  $occupation = check_occupation($row['real-time'],$row['max-capacity']);
  $int_cast = (int)$occupation;
  $real=$row['max-capacity'];
  $line=$row['real-time']-$real;
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['address'] . "</td>";
  echo "<td>".$row['opening']."<br>to<br>".$row['closing']."</td>";
  echo "<td>" . $row['city'] . "</td>";
  echo "<td>" . $row['max-capacity'] . "</td>";
  echo "<td>" . $row['category'] . "</td>";
  if($row['real-time']>$real){ echo "<td>" . $real . "</td>";}
  else{ echo "<td>" . $row['real-time'] . "</td>";}
  
  if(($row['real-time']-$row['max-capacity'])<0){$line=0;}
  echo "<td>" . $line . "</td>";
  
  
  
  if ($int_cast >= "0" && $int_cast < "35") {
  echo "<td>" . $int_cast , "% -A lot of space <i style='font-size: 24px; color: green;' class='fas fa-check-square'></i> " . "</td>";
  }
    else if ($int_cast >= "35" && $int_cast <= "60") {
  echo "<td>" . $int_cast , "% -good space <i style='font-size: 24px; color: green;' class='fas fa-check-square'></i>" . "</td>";
  }
    else if ($int_cast > "60" && $int_cast < "100") {
  echo "<td>" . $int_cast , "% -almost full <i style='font-size: 24px; color: yellow;' class='fas fa-exclamation-triangle'></i>" . "</td>";
  }
      else if ($int_cast >= "100") {
  echo "<td>" . $int_cast , "% -Arrival is not recommended <i style='font-size: 24px; color: red;' class='fas fa-ban'></i>" . "</td>";
  }
   echo "<td><button onclick='loadDoca()' class='checkbutton' name='subject' value=".$row['id'].">check in:".$row['id']."</button></td>";
  echo "</tr>";
  }
}
else {
while($row = mysqli_fetch_array($result)) {
  $occupation = check_occupation($row['real-time'],$row['max-capacity']);
  $int_cast = (int)$occupation;
  $real=$row['max-capacity'];
  $line=$row['real-time']-$real;
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['address'] . "</td>";
  echo "<td>".$row['opening']."<br>to<br>".$row['closing']."</td>";
  echo "<td>" . $row['city'] . "</td>";
  echo "<td>" . $row['max-capacity'] . "</td>";
  echo "<td>" . $row['category'] . "</td>";
  
  if($row['real-time']>$real){ echo "<td>" . $real . "</td>";}
  else{ echo "<td>" . $row['real-time'] . "</td>";}
 
  if(($row['real-time']-$row['max-capacity'])<0){$line=0;}
  echo "<td>" . $line . "</td>"; 
  
  if ($int_cast >= "0" && $int_cast < "35") {
  echo "<td>" . $int_cast , "% -A lot of space <i style='font-size: 24px; color: green;' class='fas fa-check-square'></i> " . "</td>";
  }
    else if ($int_cast >= "35" && $int_cast <= "60") {
  echo "<td>" . $int_cast , "% -good space <i style='font-size: 24px; color: green;' class='fas fa-check-square'></i>" . "</td>";
  }
    else if ($int_cast > "60" && $int_cast < "100") {
  echo "<td>" . $int_cast , "% -almost full <i style='font-size: 24px; color: yellow;' class='fas fa-exclamation-triangle'></i>" . "</td>";
  }
      else if ($int_cast >= "100") {
  echo "<td>" . $int_cast , "% -Arrival is not recommended <i style='font-size: 24px; color: red;' class='fas fa-ban'></i>" . "</td>";
  }
   echo "<td><i style='font-size: 32px' class='fas fa-sign-in-alt'></i></td>";
  echo "</tr>";
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


