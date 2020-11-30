<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='https://fonts.googleapis.com/css?family=Baumans' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Black Han Sans' rel='stylesheet'>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
<link href='https://fonts.googleapis.com/css?family=Be Vietnam' rel='stylesheet'>
<style>
ul {
  list-style-type: none;
  padding:0;
  margin:0;
  background-color: #333;
  
  overflow: hidden;
  top:0;
  width:100%;
}

li {
  float: left;
}

li a {
  
  display: inline-block;
  color: white;
  text-align: center;
  padding: 7px 25px;
  text-decoration: none;
}

li a:hover  {
    background-color: Moccasin;
   color:black;
}
.dropdown:hover .dropbtn{background-color: Moccasin;
   color:black;
   }

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}



h1{
    margin-top:100px;
 text-align:center;
  font-family: "Sofia";
  font-size: 48px;
}
h2{
    text-align:center;   
}
body {
  margin:0;
  background-color:lightgreen;
  font-family:'Be Vietnam';
}
p{
    margin-left:150px;
   font-size: 34px; 
}
form{
    margin:auto;
    padding:20px 250px;
    text-align:left; 
}
input[type=text],input[type=password] {
  border: 2px solid grey;
   background-color: #3CBC8D;
  color: white;
  border-radius: 4px;
}
input[type=text],input[type=password]:focus {
  border: 3px solid #555;
}
input[type=submit]{

border: 2px solid grey;
  border-radius: 4px;
}
input[type=button], input[type=submit], input[type=reset] {
  background-color: #3CBC8D;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  border: 2px solid grey;
}

select {
display:block;
  
  margin:auto;
  padding: 16px 20px;
  border: none;
  border-radius: 4px;
  background-color: #f1f1f1;
}

@media screen and (max-width:800px) {
	h1{padding-top:150px;
	  }
	  
	     

ul{position:fixed;}
li{width:100%;
text-align:center;
}
li a{width:91%}
h1 {
    margin-top:200px;
 text-align:center;
  font-family: "Sofia";
  font-size:35px;
  }
  table {
  width: 50%;
  border-collapse: collapse;
  }
  table, td, th {
  border: 1px solid black;
  padding: 2px;
  }
}
#myBtn,#myBtn1{
	display:block;
	background-color: #3CBC8D;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: auto;
  cursor: pointer;
  border: 2px solid grey;
}
table {
  width: 80%;
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
<ul>
  <li><a href="gather-app-manager.php" >Home</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">sign-up</a>
    <div class="dropdown-content">
      <a href="gather-customer-sign.php">customer</a>
      <a href="gather-Worker-sign.php">employee</a>
      <a href="gather-manager-sign.php">manager</a>
    </div>
  </li>
  <li><a href="gather-contact.htm">Contact</a></li>
  <li><a href="gather-about.htm">About</a></li>
  <li><a href="gather-home.php">log-out</a></li>
  <li><a href="#"><?php session_start();if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
  {echo "Welcome , " . $_SESSION['username'] . "!";} else {echo "Please log in first to see this page.";}?></a></li>
</ul>

<h1><span style='font-size:10vw;'>&#9940;</span> gather blocker <span style='font-size:10vw;'>&#129298;</span></h1>
<h2 style='font-family:Baumans'>"go out when it's safe" !</h2>


<button id="myBtn1" onclick="document.location='gather-app-manager.php'">back to app </button><br>


<?php

session_start();



$get_user=$_SESSION['username'];
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

$sql="SELECT `id`, `name`, `street`, `city`, `max-capacity`, `category`, `user-name`,`real-time` FROM `shops` WHERE `user-name`='$get_user'";

if (mysqli_query($conn, $sql)) {
  echo "<h2>shop list!<h2>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	echo "<br><br><br><br>results for user name:".$get_user."<br><br><br><br>";
	echo "<table>
          <tr>
          <th>Shop-name</th>
		  <th>Street</th>
		  <th>City</th>
		  <th>max-capacity</th>
		  <th>Category</th>
		  <th>Real-time content</th>
		  </tr>";
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
	    echo "<tr>";
		echo "<td>" . $row['name'] . "</td>";
		echo "<td>" . $row['street'] . "</td>";
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


</body>
</html>


