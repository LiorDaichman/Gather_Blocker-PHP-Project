<!DOCTYPE html>
<html>
<head>
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

th {text-align: center;}
</style>
</head>
<body>

<?php

function check_occupation($real_time,$max_capacity) {
  $sum= (100*$real_time) / $max_capacity;
  return $sum;
}
$q = $_GET['q'];

$con = mysqli_connect('localhost','root','root','gather-blocker');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT `id`, `name`, `street`, `city`, `max-capacity`, `category`, `user-name`, `real-time` FROM `shops` WHERE  `city`='$q'";
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
<th>occupation(%)</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  $occupation = check_occupation($row['real-time'],$row['max-capacity']);
  $int_cast = (int)$occupation;
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['street'] . "</td>";
  echo "<td>" . $row['city'] . "</td>";
  echo "<td>" . $row['max-capacity'] . "</td>";
  echo "<td>" . $row['category'] . "</td>";
  echo "<td>" . $row['real-time'] . "</td>";
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
  echo "<td>" . $int_cast , "% --cant come <i style='font-size: 24px; color: red;' class='fas fa-ban'></i>" . "</td>";
  }
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>