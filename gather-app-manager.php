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
#c1,#c2,#c3{border: 2px solid grey;
   background-color: #3CBC8D;
  color: white;
  border-radius: 4px;}
  
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
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}

#f2{display: block;
    margin:auto;
    text-align:center; }

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
 <a href="gather-app-manager.php"><i class="fa fa-home"></i> Home</a>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="gather-app-Client^manager.php"><i class='fab fa-drupal'></i> Client-app</a>
  <a href="#"><i class="fas fa-cogs"></i> settings</a>
  <a href="gather-home.php"><i class="fas fa-sign-out-alt"></i> log-out</a>
</div>

<div id="main">
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
</div>

<h1><span style='font-size:10vw;'>&#9940;</span> gather blocker <span style='font-size:10vw;'>&#129298;</span></h1>
<h2 style='font-family:Baumans'>"go out when it's safe" !</h2>


<p>in order to check in to one of your shops please proceed to client app</p>
<p>hello dear manager,click the bottun if you want to add your buisness/shop</p>
<button id="myBtn">click</button><br>

<form id="f1" action="gather-app-manager_action.php"target="_self" method="post" autocomplete="off">

<label for="name">buisness/shop name:</label><br>
<input type="text" id="name" name="name" required value=""><br> 


 <label for="street">street:</label><br>
<input type="text" id="street" name="street" required value=""><br>

<label for="city">city:</label><br>
 <input list="cities" name="city" id="c1" required value="">
  <datalist id="cities">
    <option value="Afula">
    <option value="Arad">
    <option value="Ashdod">
    <option value="Ashkelon">
    <option value="Bat Yam">
    <option value="Beer sheba">
    <option value="Beit She'an">
    <option value="Beit Shemesh">
    <option value="Bnei Brak">
    <option value="Dimona">
    <option value="Eilat">
    <option value="Givatayim">
    <option value="Hadera">
    <option value="Haifa">
    <option value="Herzliya">
    <option value="Holon">
    <option value="Jerusalem">
    <option value="Kfar Saba">
    <option value="Kiryat Ata">
    <option value="Kiryat Gat">
    <option value="Lod">
    <option value="Netanya">
    <option value="Nahariya">
    <option value="Petah Tikva">
    <option value="Ra'anana">
    <option value="Ramat Gan">
    <option value="Ramat HaSharon">
    <option value="Ramla">
    <option value="Rehovot">
    <option value="Rishon LeZion">
    <option value="Rosh HaAyin">
    <option value="Tel Aviv-Yafo">
  </datalist><br>
 


<label for="capacity">maximum-capacity:</label><br>
<input type="text" id="capacity" name="capacity" required value=""><br>

<label for="category">category:</label><br>
 <input list="category" name="category" id="c2" required value="">
  <datalist id="category">
     <option value="Arts">
    <option value="Automotive">
    <option value="Baby">
	<option value="beauty">
    <option value="clothing">
    <option value="Computers">
    <option value="Electronics">
    <option value="Entertainment">
    <option value="Food">
	<option value="Gadgets">
    <option value="grocery">
    <option value="Health">
    <option value="Home & Garden">
	<option value="Kitchen">
	<option value="Music">
    <option value="Office">
    <option value="Sports ">
	<option value="Outdoors">
    <option value="Toys">
	<option value="Travel">
	<option value="Education">
	<option value="other">
  </datalist><br>


<input type="submit" value="Submit">  
    
 
</form>

<p>click in order to see yor shops  </p>
<button id="myBtn1" onclick="loadDoca()">shop-list</button><br>

<div id="checkO"><b style="font-family:Baumans;font-size:24px;">.  .  .</b></div>


<h2 style='font-family:Baumans'>dear worker if you need to update manually the number of people in the buisness choose your shops id and click the button</h2>


<form id="f2" action="gather-app-manager-manual.php"target="_self" method="post" autocomplete="off">
 
 
 <label for="ID">ID:</label><br>
 <input list="ID" name="ID" id="c3" required value="">
 <datalist id="ID">
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
  <option value="31">31</option>
  <option value="32">32</option>
  <option value="33">33</option>
  <option value="34">34</option>
  <option value="35">35</option>
  <option value="36">36</option>
  <option value="37">37</option>
  <option value="38">38</option>
  <option value="39">39</option>
  <option value="40">40</option>
  </datalist><br>

<input type="submit" value="for manual inserting"></input>
</form>


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

var x = document.getElementById("myBtn");
x.addEventListener("click", displayform);

function displayform() {
  document.getElementById("f1").style.display="block";
}

function loadDoca() {
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("checkO").innerHTML = this.responseText;
    }
  };
 
  xhttp.open("GET", "shop-list-manager.php", true);
  xhttp.send();
  
}
 </script>










</body>
</html>