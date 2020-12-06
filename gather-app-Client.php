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
    margin-left:150px;
   font-size: 34px; 
}
form{
    margin:auto;
    
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
   
}
#b1{ background-color: #3CBC8D;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  border: 2px solid grey;
   border-radius: 4px;
   align:center;
   margin-left:700px;
   display:none;}
   
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
#f5{
float:left;
margin-left:25px;
}
#f4{
float:right;
margin-right:25px;
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
  padding: 16px;
}

</style>

</head>
<body>
<ul>
  <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
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
 <a href="#"><i class="fa fa-home"></i> Home</a>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="gather-app-Client"><i class='fab fa-drupal'></i> Client-app</a>
  <a href="#"><i class="fas fa-cogs"></i> settings</a>
  <a href="gather-home.php"><i class="fas fa-sign-out-alt"></i> log-out</a>
</div>

<div id="main">
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
</div>

<h1><span style='font-size:10vw;'>&#9940;</span> gather blocker <span style='font-size:10vw;'>&#129298;</span></h1>
<h2 style='font-family:Baumans'>"go out when it's safe" !</h2>

<h2 style='font-family:Baumans'>select a city in order to watch available buisnesess by cities</h2>

<h2 id="BYca" style='font-family:Baumans'>select a category in order to watch available buisnesess by categories</h2>

<form>
<select id="f4" name="users" onchange="loadDoc(this.value)">
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
</form>

<form>
<select id="f5" name="category" onchange="loadDoc2(this.value)">
      <option value="">select a category</option>
     <option value="Arts">Arts</option>
    <option value="Automotive">Automotive</option>
    <option value="Baby">Baby</option>
	<option value="beauty">beauty</option>
    <option value="clothing">clothing</option>
    <option value="Computers">Computers</option>
    <option value="Electronics">Electronics</option>
    <option value="Entertainment">Entertainment</option>
    <option value="Food">Food</option>
	<option value="Gadgets">Gadgets</option>
    <option value="grocery">grocery</option>
    <option value="Health">Health</option>
    <option value="Home & Garden">Home & Garden</option>
	<option value="Kitchen">Kitchen</option>
	<option value="Music">Music</option>
    <option value="Office">Office</option>
    <option value="Sports ">Sports</option>
	<option value="Outdoors">Outdoors</option>
    <option value="Toys">Toys</option>
	<option value="Travel">Travel</option>
	<option value="Education">Education</option>
	<option value="other">other</option>
  </select>

</form><br><br><br>




<div id="demo"><b style="font-family:Baumans;font-size:24px;"></b></div>


<br><br>

<h2 style='font-family:Baumans'>And then select the id of the shop that you want to enter</h2>




<form>
<select id="f1" name="id" onchange="loadDocs(this.value)">
  <option value="">:</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
  <option value="25">25</option>
  <option value="26">26</option>
  <option value="27">27</option>
  <option value="28">28</option>
  <option value="29">29</option>
  <option value="30">30</option>
  
  
  
  </select>
</form>


<div id="check"><b style="font-family:Baumans;font-size:24px;">. . .</b></div>



<button id="b1" type="button" onclick="loadDoca()">check out</button>


<div id="checkO"><b style="font-family:Baumans;font-size:24px;">. . .</b></div>
<script>

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
  $("#b1").click(function(){
    $(this).hide();
	$("#f1").show();
	
  });
});
$(document).ready(function(){
  $("#f1").change(function(){
    alert("now your in!, please don't forget to check out as well!");
	$(this).hide();
	$("#b1").show();
	
  });
});

function loadDoc(str) {
  if(str==" "){
    document.getElementById("demo").innerHTML = " ";
    return;
	}
	else{
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
  };
 
  xhttp.open("GET", "demo_get.php?q="+str, true);
  xhttp.send();
  }
}

function loadDoc2(str) {
  if(str==" "){
    document.getElementById("demo").innerHTML = " ";
    return;
	}
	else{
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
  };
 
  xhttp.open("GET", "demo2_get.php?q="+str, true);
  xhttp.send();
  }
}

function loadDocs(str) {
  if(str==" "){
    document.getElementById("demo").innerHTML = " ";
    return;
	}
	else{
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("check").innerHTML = this.responseText;
    }
  };
 
  xhttp.open("GET", "Client-check-in.php?q="+str, true);
  xhttp.send();
  }
}
function loadDoca() {
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("checkO").innerHTML = this.responseText;
    }
  };
 
  xhttp.open("GET", "Client-check-out.php", true);
  xhttp.send();
  
}
</script>

</body>
</html>












</body>

</html>
