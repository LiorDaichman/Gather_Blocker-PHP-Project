<?php

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


$pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password );

 
//Get the name that is being searched for.
$name = isset($_GET['name']) ? trim($_GET['name']) : '';
 
//The simple SQL query that we will be running.
$sql = "SELECT `id`, `name`,`address`,`max-capacity`, `real-time` FROM `shops` WHERE `name` LIKE :name OR `address` LIKE :name OR `category` LIKE :name OR `city` LIKE :name";
 
//Add % for wildcard search!

$name = "%$name%";
 
//Prepare our SELECT statement.
$statement = $pdo->prepare($sql);
 
//Bind the $name variable to our :name parameter.
$statement->bindValue(':name', $name);
 
//Execute the SQL statement.
$statement->execute();
 
//Fetch our result as an associative array.
$results = $statement->fetchAll(PDO::FETCH_ASSOC);
 
//Echo the $results array in a JSON format so that we can
//easily handle the results with JavaScript / JQuery
echo json_encode($results);


?>