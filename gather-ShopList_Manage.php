<html>
<head>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='https://fonts.googleapis.com/css?family=Baumans' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Black Han Sans' rel='stylesheet'>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
<link href='https://fonts.googleapis.com/css?family=Be Vietnam' rel='stylesheet'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="apps.js"></script>


<style>
.container {
  margin-top: 20px;
}

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
    margin-top:10px;
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
    
   font-size: 20px; 
   text-align:center;
}
#f1{
	display: none;
    margin:auto;
    text-align:center; 
	
	
}
input[type=text] ,input[type=password]{
  border: 2px solid grey;
   
  color: white;
  border-radius: 4px;
  padding: 4px 16px;
}
input[type=text]:focus {
  border: 3px solid #555;
}
input[type=submit]{

border: 2px solid grey;
  border-radius: 4px;
  align:center;
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
#c1,#c2,#c33{border: 2px solid grey;
   background-color: #3CBC8D;
  color: white;
  border-radius: 4px;
  padding: 4px 16px;}
 
 
  
  #b1{
	  border: 2px solid grey;
   background-color: #3CBC8D;
  color: white;
  border-radius: 4px;
  display: none;
    margin:auto;
    text-align:center;
	 padding: 16px 16px;}
  
  .sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
#main {
  transition: margin-left .5s;
  padding: 4px;
}
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}

#f2,#c3,#f5{display: block;
    margin:auto;
    text-align:center; }

div.sticky {
 
  position: sticky;
  top: 0;
  padding: 2px;
  background-color:Moccasin;
  border: 2px solid Moccasin;
  border-radius:4px;
  
}
#c3{border: 2px solid grey;
   background-color: #3CBC8D;
  color: white;
  border-radius: 4px;
  padding: 4px 16px;
  display: none;
  }
  input[type="time"]::-webkit-calendar-picker-indicator {
   filter: invert(0.5) sepia(1) saturate(5) hue-rotate(175deg);
}

</style>
</head>
<body>
<ul>
  <li><a href="gather-app-manager.php" ><i class="fa fa-home"></i> Home</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn"><i class="fas fa-user-plus"></i> sign-up</a>
    <div class="dropdown-content">
      <a href="gather-customer-sign.php">customer</a>
      <a href="gather-Worker-sign.php">employee</a>
      <a href="gather-manager-sign.php">manager</a>
    </div>
  </li>
  <li><a href="gather-contact.htm"><i class="fas fa-paper-plane"></i> Contact</a></li>
  <li><a href="gather-about.htm"><i class="fas fa-info-circle"></i> About</a></li>
  <li><a href="gather-home.php"><i class="fas fa-sign-out-alt"></i> log-out</a></li>
   <li><a href="#"><?php session_start();if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
  {echo "Welcome , " . $_SESSION['username'] . "!";} else {echo "Please log in first to see this page.";}?></a></li>
</ul>

<div id="mySidenav" class="sidenav">
<a href="#"><i class="fas fa-user"></i><? session_start(); echo $_SESSION['username'];
if($_SESSION['insideB']!=" "){
	 echo "<br>youre in:".$_SESSION['insideB'];
 }?> </a>
 <a href="gather-app-manager.php"><i class="fa fa-home"></i> Home</a>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="gather-ShopList_Manage.php" ><i  class ="fas fa-store-alt"></i>ShopList Manage</a>
  <a href="gather-app-Client^manager.php"><i class='fab fa-drupal'></i> Client-app</a>
  <a href="settings_manager.php"><i class="fas fa-cogs"></i>Settings</a>
   <a href="rate_us^manager.php"><i class="fas fa-grin-stars"></i> Rate us</a>
  <a href="gather-home.php"><i class="fas fa-sign-out-alt"></i> Log-out</a>
</div>

<div class="sticky"><b id="clock" style="font-family:Baumans;font-size:48px; float:right;"></b>

<div id="main">
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span></div>

</div>

<br>
<br>
<h1><span style='font-size:10vw;'>&#9940;</span> gather blocker <span style='font-size:10vw;'>&#129298;</span></h1>
<h2 style='font-family:Baumans'>"go out when it's safe" !</h2>


<?
session_start();
if($_SESSION['updated']=="updated successfully"){
echo "<h2 style='font-family:Baumans'>manually inserted successfully to : ".$_SESSION['bID']."</h2>";}
else if($_SESSION['updated']=="Error updating record: "){
	echo "<h2 style='font-family:Baumans'>".$_SESSION['updated']."</h2>";
}
$_SESSION['updated']=" ";

?>

<p align="center" ><button style="border-radius: 4px;font-size: 32px; color:white;background-color:#3CBC8D;"onclick="loadDoca()" id="Wbtn">workers list</button><br></p>
<div id="check"><b style="font-family:Baumans;font-size:24px;"></b></div>
<div id="checkas"><b style="font-family:Baumans;font-size:24px;"></b></div>







<h2 style='font-family:Baumans'>ShopList:shop/buisness add</h2>

<button style="border-radius: 4px;font-size: 32px; color:white;" id="myBtn">Add <i class="fas fa-folder-plus"></i></button><br>




<form  id="f1" style="display:none" action="home_action3.php" method="post"target="_self">




<div class="container">
  <div class="panel panel-primary">
    <div style="background-color:#3CBC8D" class="panel-heading">
      <h2 class="panel-title">Add your buisness Address</h2>
    </div>
    <div class="panel-body">
	
      <div id="address">
	  
	  
          
            <label class="control-label">buisness/shop name:</label>
            <input required value="" class="form-control" name="name" id="name" >
          
         
            <label class="control-label">maximum-capacity:</label>
            <input class="form-control"  name="capacity" id="capacity" required value="">
         
          
          <label style="font-family:Baumans;" class="control-label" for="open"><i class="fas fa-door-open" ></i> opening at:</label>
          <input style="font-family:Baumans;text-align:center" class="form-control" type="time" name="open"></input>
          <label style="font-family:Baumans;" class="control-label" for="close"><i class="fas fa-store-alt-slash" ></i> closing at:</label>
          <input style="font-family:Baumans;text-align:center" class="form-control" type="time" name="close"></input>

           

      <label class="control-label">City</label>
          
          <select class="form-control field" name="city" id="city1" required value="">
  <option value=" ">select a city</option>
<option value="Afula">Afula:</option>
  <option value="Arad">Arad:</option>
  <option value="Ashdod">Arad:</option>
  <option value="Ashkelon">Ashkelon:</option>
  <option value="Bat Yam">Bat Yam:</option>
  <option value="Beer sheba">Beer sheba:</option>
  <option value="Beit She'an">Beit She'an:</option>
  <option value="Beit Shemesh">Beit Shemesh:</option>
  <option value="Bnei Brak">Bnei Brak:</option>
  <option value="Dimona">Dimona:</option>
  <option value="Eilat">Eilat:</option>
  <option value="Givatayim">Givatayim:</option>
  <option value="Hadera">Hadera:</option>
  <option value="Haifa">Haifa:</option>
  <option value="Herzliya">Herzliya:</option>
  <option value="Holon">Holon:</option>
  <option value="Jerusalem">Jerusalem:</option>
  <option value="Kfar Saba">Kfar Saba:</option>
  <option value="Kiryat Ata">Kiryat Ata:</option>
  <option value="Kiryat Gat">Kiryat Gat:</option>
  <option value="Lod">Lod:</option>
  <option value="Netanya">Netanya:</option>
  <option value="Nahariya">Nahariya:</option>
  <option value="Petah Tikva">Petah Tikva:</option>
  <option value="Ra'anana">Ra'anana:</option>
  <option value="Ramat Gan">Ramat Gan:</option>
  <option value="Ramat HaSharon">Ramat HaSharon:</option>
  <option value="Ramla">Ramla:</option>
  <option value="Rehovot">Rehovot:</option>
  <option value="Rishon LeZion">Rishon LeZion:</option>
  <option value="Rosh HaAyin">Rosh HaAyin:</option>
  <option value="Tel Aviv-Yafo">Tel Aviv-Yafo:</option>

</select>
        


          
         
      
       
            <label for="category">category:</label><br>
            <select class="form-control field" name="category" id="category" name="category"  required value="">
      <option value=" ">select a category</option>
     <option value="Arts">Arts:</option>
    <option value="Automotive">Automotive:</option>
    <option value="Baby">Baby:</option>
	<option value="beauty">beauty:</option>
    <option value="clothing">clothing:</option>
    <option value="jewelry">jewelry:</option>
    <option value="Computers">Computers:</option>
    <option value="Electronics">Electronics:</option>
    <option value="Entertainment">Entertainment:</option>
    <option value="Food">Food:</option>
	<option value="Gadgets">Gadgets:</option>
    <option value="grocery">grocery:</option>
    <option value="Health">Health:</option>
    <option value="Home & Garden">Home & Garden:</option>
	<option value="Music">Music:</option>
    <option value="Office">Office:</option>
    <option value="Sports ">Sports:</option>
	<option value="Outdoors">Outdoors:</option>
    <option value="Toys">Toys:</option>
	<option value="Travel">Travel:</option>
	<option value="Education">Education:</option>
	<option value="other">other:</option>
  </select><br>      
          
  <label class="control-label">buisness/shop Address:</label>
      <input style="color:#111" id="autocomplete" placeholder="Enter your address" onFocus="geolocate()" type="text" class="form-control" name="address">


            <label class="control-label">Street number</label>
            <input class="form-control" name="street_number" id="street_number" disabled="true">
          
         
            <label class="control-label">Street</label>
            <input class="form-control" name="route" id="route" disabled="true">
          
        
        
            
            <input style="display:none" class="form-control field" name="locality" id="locality" disabled="true">
          
          
         
            <label class="control-label">State</label>
            <input class="form-control" name="administrative_area_level_1" id="administrative_area_level_1" disabled="true">

            <label class="control-label">Country</label>
            <input class="form-control" name="country" id="country" disabled="true">

            
          
          
      
	 <br><br> <input type="submit" value="Submit"><br><br>
    </div>
	  
  </div>
  
</div>

     <input style="display:none" type="text" name="lat" id="lat">
     <input style="display:none" type="text" name="lng" id="lng">

               
 
</form>






<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzEQNrZAro6z0848S1hBpQvo6QuK-73yw&libraries=places&region=US&language=en&callback=initAutocomplete" async defer></script>  








<script> 
$(document).ready(function(){
  $("#myBtn").click(function(){
	$("#f1").toggle();
	
  });
});
function displayTime() {
   let date = new Date();
   let time = date.toLocaleTimeString();
   document.getElementById('clock').textContent = time;
}

const createClock = setInterval(displayTime, 1000);
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "lightgreen";
}
function loadDoca() {
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("check").innerHTML = this.responseText;
    }
  };
 
  xhttp.open("GET", "manager-workers-list.php", true);
  xhttp.send();
  
}
function aprooveW(str) {
  if(str==" "){
    
    return;
	}
	else{
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("checkas").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "worker-aproove.php?q="+str, true);
  xhttp.send();
  }

  setTimeout(loadDoca(), 1500);
}
function disaprooveW(str) {
  if(str==" "){
    
    return;
	}
	else{
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("checkas").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "worker-disaproove.php?q="+str, true);
  xhttp.send();
  }

  setTimeout(loadDoca(), 1500);
}


</script>





</body>
</html>
















