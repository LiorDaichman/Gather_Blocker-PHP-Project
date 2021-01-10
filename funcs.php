<?php declare(strict_types=1);
function passwordCheck(string $pas){
	if(strlen($pas)<6){
	  return false;
	}
    else{
     return true;	
	}
		
}
function passwordCheck_confirm(string $pas,string $confirm_pas){
if($confirm_pas==$pas){return true;}

else return false;
	
	
}

function availableUser(string $user){
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
$sql = "SELECT `id`, `first-name`, `last-name`, `user-name`, `password` FROM `customers` WHERE `user-name`='$user'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
 return false;
 else{
	 $sql = "SELECT `id`, `first-name`, `last-name`, `user-name`, `password`  FROM `managers` WHERE  `user-name`='$user'";
     $result = mysqli_query($conn, $sql);
	 if (mysqli_num_rows($result) > 0)
        return false; 
		else{
			 $sql = "SELECT `id`, `first-name`, `last-name`, `buisness-name`, `user-name`, `password` FROM `workers` WHERE  `user-name`='$user'";
             $result = mysqli_query($conn, $sql);
			 if (mysqli_num_rows($result) > 0) return false;
			
		}
	
	 
	 
 }


return true;

	
}



?>