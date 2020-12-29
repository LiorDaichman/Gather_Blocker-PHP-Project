<?php
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



 $sql="SELECT `id`, `name`, `address`, `city`, `max-capacity`, `category`,
  `user-name`, `real-time`, `lat`, `lng` FROM `shops` WHERE 1";
 
               
$result = mysqli_query($conn, $sql);
                
if (mysqli_num_rows($result) > 0) {
    $ar=array();
    while($row = mysqli_fetch_array($result)){
      $occupation = check_occupation($row['real-time'],$row['max-capacity']);
      $int_cast = (int)$occupation;
      
      
      $buton='<div style="background-color: #3CBC8D;
      border: none;
      color: white;
      padding: 16px 60px;
      text-decoration: none;
       text-align:center;"><strong>'.$row[name].'</strong></div><p style="font-family: "Alatsi";font-size: 22px;">'.$row[address].'</p>
       <p style="font-family: "Alatsi";font-size: 22px;">(%)occupation : '.$int_cast.' %</p>';

      array_push($ar,array($row[name],$buton,$row[lat],$row[lng]));   
  }

}
?>