<?php
$servername = "localhost";
 $username = "root";
 $password = "root";
$dbname = "admin";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}



 $sql="SELECT `id`, `name`, `address`, `city`, `max-capacity`, `category`,
  `user-name`, `real-time`, `lat`, `lng` FROM `shops` WHERE 1";
 
               
$result = mysqli_query($conn, $sql);
                
if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_array($result)){
        echo ' 
         var myLatlng1 = new google.maps.LatLng('.$row[lat].', '.$row[lng].');
         var marker1 = new google.maps.Marker({ position: myLatlng1,  map: map, title:"'.$row[name].'"});
         var infowincontent = "'.$row[name].'";
         marker1.addListener("click", function() {
         infoWindow.setContent(infowincontent);
         infoWindow.open(map, marker1);
       });
         ';
         
  }
}
?>