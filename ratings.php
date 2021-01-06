<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='https://fonts.googleapis.com/css?family=Baumans' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Black Han Sans' rel='stylesheet'>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
<link href='https://fonts.googleapis.com/css?family=Be Vietnam' rel='stylesheet'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<style>
* {box-sizing: border-box}

.container3 {
    margin:auto;
    display:block;
  width: 35%;
  background-color: #ddd;
}

.skills {
  text-align: center;
  padding-top: 10px;
  padding-bottom: 10px;
  color: white;
}


</style>
</head>
<body>
<?php
session_start();
$user= $_SESSION['username'];
$servername = "localhost";
 $username = "root";
 $password = "root";
$dbname = "admin";
function check_occupation($real_time,$max_capacity) {
  $sum= (100*$real_time) / $max_capacity;
  return $sum;
}
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
$sql="SELECT `id`, `user-name`, `rating`
FROM `ratings` WHERE 1";
$count=0;
$sum2=0;
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result)){
        $sum2=$sum2+$row['rating'];
        $count=$count+1;

          
    }


}
else{
    echo"<h2 style='font-family:Baumans'>No voteings</h2>";

}
$result=check_occupation($sum2,5*$count);
$result2=$sum2/$count;
$float=number_format((float)$result2, 2, '.', '');

echo '<br><div class="container3"> <div class="skills"style="width: '.$result.'%; background-color: #4CAF50;">'.$float.'  /  5</div></div><br><br>';
echo"<h2 style='font-family:Baumans'>".$count.": voteings</h2>";
echo'<i style=";font-size:48px" class="fas fa-grin-stars"></i>
<i style=";font-size:48px" class="fas fa-grin-stars"></i>
<i style=";font-size:48px" class="fas fa-grin-stars"></i>
<i style=";font-size:48px" class="fas fa-grin-stars"></i>
<i style=";font-size:48px" class="fas fa-grin-stars"></i>';

?>
</body>
</html>
