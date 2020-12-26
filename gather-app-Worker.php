<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='https://fonts.googleapis.com/css?family=Baumans' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Black Han Sans' rel='stylesheet'>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
<link href='https://fonts.googleapis.com/css?family=Be Vietnam' rel='stylesheet'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
  text-align:left;
  
   
}
p{
   
   font-size: 34px; 
}
form{
    margin:auto;
    padding:20px 250px;
    text-align:center; 
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
   border-radius: 4px;
   margin-left:700px;
}
#b1{ background-color: tomato;
  border: none;
  color: white;
  padding: 16px 128px;;
  text-decoration: none;
  margin: auto;
  cursor: pointer;
  border: 2px solid grey;
   border-radius: 4px;
   align:center;
   display:none;
   }
  
  #c1,#c12{ background-color: #3CBC8D;
  border: none;
  color: white;
  padding: 16px 128px;
  text-decoration: none;
  margin: auto;
  cursor: pointer;
  border: 2px solid grey;
   border-radius: 4px;
  
  
   display:inline-block;
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
    margin-top:10px;
 text-align:center;
  font-family: "Sofia";
  font-size:35px;
  }
}
#demo,#check,#checkO{text-align:center;}

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
div.sticky {
 
  position: sticky;
  top: 0;
  padding: 2px;
  background-color:Moccasin;
  border: 2px solid Moccasin;
  border-radius:4px;
  
}
table #center {
	
  margin-left: auto; 
  margin-right: auto;
   width:25%;
  border: 1px solid black;
  border-collapse: collapse;
}
td {
   text-align:center;
   height:5px;
  
}
td:hover {background-color: #f5f5f5;}

#center td, #center th {
  border: 1px solid #ddd;
  padding: 8px;
}

.button32 {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button32:hover {background-color: #3e8e41}

.button32:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}


</style>
</head>
<body>

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

$sql="SELECT `id`, `first-name`, `last-name`, `buisness-name`, `user-name`, `password` FROM `workers` WHERE `user-name` = '$get_user'";




$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_assoc($result);
	$_SESSION["workerBuisness"]=$row["buisness-name"];
	
}



?>


<ul>
  <li><a href="gather-app-Worker.php" ><i class="fa fa-home"></i> Home</a></li>
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
 <a href="#"><i class="fas fa-user"></i><? echo $_SESSION['username']."<br>";echo "working at :".$_SESSION["workerBuisness"];  if($_SESSION['insideB']!=" "){
	 echo "<br>youre in:".$_SESSION['insideB'];
 }
 ?> </a>
 <a href="gather-app-Worker.php"><i class="fa fa-home"></i> Home</a>
 <a href="gather-app-Worker-manual.php" ><i  class ="fas fa-store-alt"></i>Store presence update</a>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="gather-app-Client^worker.php"><i class='fab fa-drupal'></i> Client-app</a>
  <a href="#"><i class="fas fa-cogs"></i> settings</a>
  <a href="gather-home.php"><i class="fas fa-sign-out-alt"></i> log-out</a>
</div>

<div class="sticky"><b id="clock" style="font-family:Baumans;font-size:48px; float:right;"></b>

<div id="main">
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span></div>

</div>

<h1><span style='font-size:10vw;'>&#9940;</span> gather blocker <span style='font-size:10vw;'>&#129298;</span></h1>
<h2 style='font-family:Baumans'>"go out when it's safe" !</h2>


<p align="center" id='p41' style='font-family:Baumans;display:none;'>guests counting</p>

<p id='p40' align="center" style='display:none'><button class="button32" type="button" onclick="loadDocim('2')"><i class="fas fa-user-plus"></i></button>
<button class="button32" type="button" onclick="loadDocim('-')"><i class="fas fa-user-minus"></i></button></p>

<div id="checkas"><b style="font-family:Baumans;font-size:24px;"></b></div>

<table id="center">
  <tr>
    <td><button id="b1" type="button" onclick="loadDoca2()">check out from the shop</button></td>
    <td><button id="c1" onclick="loadDoca()">check-in to shop</button></td> 
  </tr>
</table>

<div id="check"><b style="font-family:Baumans;font-size:24px;"></b></div>
<div id="check1"><b style="font-family:Baumans;font-size:24px;"></b></div>


<br><br><br>





<?
mysqli_close($conn);
?>


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

var stats = localStorage.getItem("status_w");
if(stats!==null){
	$(document).ready(function(){
	  $("#b1").show();
	  $("#c1").hide();
	  $('#p40').show();
	  $('#p41').show();
	  alert("welcome back,if you got out the buisness please check out");
	});
}

$(document).ready(function(){
  $("#c1").click(function(){
    $(this).hide();
	$("#b1").show();
	$('#p40').show();
	$('#p41').show();
	alert("now your in!, please don't forget to check out as well!");
	localStorage.setItem("status_w", true);
	setTimeout(loadDocas(), 500);
  });
});

$(document).ready(function(){
  $("#b1").click(function(){
    $(this).hide();
	$("#c1").show();
	$('#p40').hide();
	$('#p41').hide();
	localStorage.removeItem("status_w");
	setTimeout(loadDocas(), 500);
	
  });
});
$(document).on('click', '.checkbutton', function () {
    $("#b1").show();
    $('.checkbutton').hide();
	$("#c1").hide();
	localStorage.setItem("status_w", true);
	setTimeout(loadDocas(), 500);
	$('#p40').show();
	$('#p41').show();
	
});
$(document).ready(function(){
setTimeout(loadDocas(), 500);	
	
});
function loadDocas() {
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("check1").innerHTML = this.responseText;
    }
  };
 
  xhttp.open("GET", "shop-list-worker.php", true);
  xhttp.send();
  
}
function loadDoca() {
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("check").innerHTML = this.responseText;
    }
  };
 
  xhttp.open("GET", "gather-app-Worker_action.php", true);
  xhttp.send();
  
}
function loadDoca2() {
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("check").innerHTML = this.responseText;
    }
  };
 
  xhttp.open("GET", "gather-app-Worker_action2.php", true);
  xhttp.send();
  
}

function loadDocim(str) {
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
 
  xhttp.open("GET", "worker-guest_check.php?q="+str, true);
  xhttp.send();
  }
}

$(document).on('click', '.button32', function () {
setTimeout(loadDocas(), 500);
setTimeout(function () {document.getElementById('foo').style.display='none'},2200);
	
});

</script>

</body>

</html>

