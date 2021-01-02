<?php

session_start();



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

$sql="SELECT `id`, `name`, `address`, `city`, `max-capacity`, `category`, `user-name`,`real-time` FROM `shops` WHERE 1";

if (mysqli_query($conn, $sql)) {
  echo "<h2>shop list!<h2>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	echo "<table>
          <tr>
		  <th>id</th>
          <th>Shop-name</th>
		  <th>address</th>
		  <th>City</th>
		  <th>max-capacity</th>
		  <th>Category</th>
		  <th>Real-time content</th>
		  </tr>";
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
	    echo "<tr>";
		echo "<td>" . $row['id'] . "</td>";
		echo "<td>" . $row['name'] . "</td>";
		echo "<td>" . $row['address'] . "</td>";
		echo "<td>" . $row['city'] . "</td>";
		echo "<td>" . $row['max-capacity'] . "</td>";
		echo "<td>" . $row['category'] . "</td>";
		echo "<td>" . $row['real-time'] . "</td>";
		echo "</tr>";
    }

}
else {
  echo "0 results";
}



mysqli_close($conn);




?>
