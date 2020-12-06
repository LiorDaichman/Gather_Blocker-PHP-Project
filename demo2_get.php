<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = $_GET['q'];

$con = mysqli_connect('localhost','root','root','gather-blocker');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT `id`, `name`, `street`, `city`, `max-capacity`, `category`, `user-name`, `real-time` FROM `shops` WHERE  `category`='$q'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>id</th>
<th>name</th>
<th>street</th>
<th>city</th>
<th>max-capacity</th>
<th>category</th>
<th>real-time</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['street'] . "</td>";
  echo "<td>" . $row['city'] . "</td>";
  echo "<td>" . $row['max-capacity'] . "</td>";
  echo "<td>" . $row['category'] . "</td>";
  echo "<td>" . $row['real-time'] . "</td>";
  
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>