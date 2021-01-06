<!DOCTYPE html>
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
   background-color: #3CBC8D;
  color: white;
  border-radius: 4px;
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
#c1,#c2,#c3,#c33{border: 2px solid grey;
   background-color: #3CBC8D;
  color: white;
  border-radius: 4px;
  padding: 10px 32px;
  align:center;
  }
  
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


	#f1{
	display: none;
    margin:auto;
    text-align:center; 
	
}
div.sticky {
 
  position: sticky;
  top: 0;
  padding: 2px;
  background-color:Moccasin;
  border: 2px solid Moccasin;
  border-radius:4px;
  
}
#f2{
	display: none;
    margin:auto;
    text-align:center; 
	
	
}

</style>
</head>
<body>
<ul>
<li><a href="gather-app-Client.php"><i class="fa fa-home"></i> Home</a></li>
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
 }
?> </a>

 <a href="#"><i class="fa fa-home"></i> Home</a>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="gather-app-Client.php"><i class='fab fa-drupal'></i> Client-app</a>
  <a href="settings_client.php"><i class="fas fa-cogs"></i> settings</a>
  <a href="rate_us^client.php"><i class="fas fa-grin-stars"></i> Rate us</a>
  <a href="gather-home.php"><i class="fas fa-sign-out-alt"></i> log-out</a>
</div>

<div class="sticky"><b id="clock" style="font-family:Baumans;font-size:48px; float:right;"></b>

<div id="main">
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span></div>

</div>
<br>
<br>
<h1>gather blocker <br> <img src="pics/gathering.png"><br></h1>
<h2 style='font-family:Baumans'>"go out when it's safe" !<br><br><br> 
<br>
<br>
<p>hello dear client,in order to change your private details click the button  </p>
<br>
<br><br>
<br>


<form id="f1" action="settings_client_action.php" target="_self" method="post" autocomplete="off">


<label for="first-name">first-name:</label><br>
<input type="text" id="first-name" name="first-name" required value=""><br> 

<label for="last-name">last-name:</label><br>
<input type="text" id="last-name" name="last-name" required value=""><br> 

  
<label for="user-name">user-name:</label><br>
<input type="text" id="user-name" name="user-name" required value=""><br>
  
  
<label for="password">password:</label><br>
<input type="password" id="password" name="password" required value=""><br>

<label for="password-confirm">password-confirm:</label><br>
<input type="password" id="password-confirm" name="password-confirm" required value=""><br>


<input type="submit" value="Submit">  
    
 
</form>

<p align=center><button id="c1">to change your private details</button></p> 
<br>
<br><br>
<br>









</body>
<script> 
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
$(document).ready(function(){
  $("#c1").click(function(){
	$("#f1").toggle();
  });
});
$(document).ready(function(){
  $("#c2").click(function(){
	$("#f2").toggle();
  });
});

</script>
</html>