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
    margin-top:100px;
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
   background-color: tomato;
  color: white;
  border-radius: 4px;
  display: none;
   
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

#f2,#c3{display: block;
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
 if (isset($_SESSION['insideBM']) && $_SESSION['insideBM'] != " "){
	 echo "<br>youre in:".$_SESSION['insideBM'];
 }?> 
 </a>
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
<button id="b1" type="button" onclick="loadDoci2()">check out from the shop</button>
</div>

<h1>gather blocker <br> <img src="pics/gathering.png"><br></h1>
<h2 style='font-family:Baumans'>"go out when it's safe" !</h2><br><br><br> 

<?php  session_start();if (isset($_SESSION['detailchanged'])&&$_SESSION['detailshow']==1)
  {echo "<p id='foo4'>you have successfully changed your details :".$_SESSION['username'] . "!</p><br>";
  $_SESSION['detailshow']--;
  } ?>








<p style='display:none' id='p41' align="center" style='font-family:Baumans'>guests counting</p>
<p style='display:none' id='p40' align="center">
<button class="button32" type="button" onclick="loadDocim('2')"><i class="fas fa-user-plus"></i></button>
<button class="button32" type="button" onclick="loadDocim('-')"><i class="fas fa-user-minus"></i></button></p>



<div id="checkas"><b style="font-family:Baumans;font-size:24px;"></b></div>


<div style='display:none' id='p42'><p  align="center">
<form id="f2" action="manual2.php"target="_self" method="post" autocomplete="off">
<h2 id="" style='font-family:Baumans'> Manually update those present at the business </h2>

 <label for="ID">select the buisness</label><br>
 <input list="ID" name="ID" id="c33" required value="">
  <datalist id="ID">
  
  <?php 
        session_start();
        $get_user = $_SESSION['username'];
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "admin";

// Create connection
        $conn = mysqli_connect($servername,$username,$password,$dbname);

// Check connection
       if (!$conn) {
         die("Connection failed: " . mysqli_connect_error());
         }
        $records = mysqli_query($conn, "SELECT `id`, `name`, `address`, `city`, `max-capacity`, `category`, `user-name`, `real-time`
		FROM `shops` WHERE `user-name`='$get_user'");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['id'] ."'>" .$data['id'].">".$data['name']."</option>";  // displaying data in option menu
        }	
    ?>  
  
  </datalist><br>
<label for="count">select the amount</label><br>
<select id="f5" name="count" required value="">
  <option value="0">0</option>
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
  
  </select>


<input style="border:2px solid grey" type="submit" value="manual update"></input>
</form>


</p>
      </div>

<div id="checkO" ></div>
<p align=center><button id="b1" type="button" onclick="loadDoci2()">check out from the shop</button>

<div id="check"><b style="font-family:Baumans;font-size:24px;"></b></div></p>
<b style="font-family:Baumans;font-size:24px;"></b>
</div>

<p style="font-family:Baumans;font-size:24px;">click in order to see yor shops  </p>

<button style="border-radius: 4px" id="myBtn1" onclick="loadDoca()"><i class="fas fa-list"></i>   shop-list</button><br>
<div id="check"><b style="font-family:Baumans;font-size:24px;"></b></div></p>

<h2 id="h30" style='font-family:Baumans;display:none;'>or choose one of your shops </h2>
 
 
 <p align=center><input list="ID" name="ID" id="c3" required value="" onchange="loadDoci(this.value)">
  <datalist id="ID">
 <?php 
        session_start();
        $get_user = $_SESSION['username'];
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "admin";

// Create connection
        $conn = mysqli_connect($servername,$username,$password,$dbname);

// Check connection
       if (!$conn) {
         die("Connection failed: " . mysqli_connect_error());
         }
        $records = mysqli_query($conn, "SELECT `id`, `name`, `address`, `city`, `max-capacity`, `category`, `user-name`, `real-time`
		FROM `shops` WHERE `user-name`='$get_user'");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['id'] ."'>" .$data['id'].">".$data['name']."</option>";  // displaying data in option menu
        }	
    ?>  
  
  </datalist><br>
  </p>
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

$(document).ready(function(){
  $("#myBtn1").click(function(){
	if(localStorage.getItem("status_m")===null){
	$("#c3").show();
	$("#h30").show();
	
	}
  });
});

var stats = localStorage.getItem("status_m");
if(stats!==null){
	$(document).ready(function(){
	  $("#b1").show();
	  $("#c3").hide();
	  $('#p40').show();
  $('#p41').show();
  $('#p42').show();
	  alert("welcome back,if you got out the buisness please check out");
	});
}
$(document).on('click', '.checkbutton', function () {
    setTimeout(loadDoca(), 1500);
	$("#b1").show();
    $('.checkbutton').hide();
	$("#c3").hide();
	$('#p40').show();
  $('#p41').show();
  $('#p42').show();
	localStorage.setItem("status_m", true);
	
	
});
$(document).ready(function(){
  $("#c3").change(function(){
    $(this).hide();
	$("#b1").show();
	$('#p40').show();
  $('#p41').show();
  $('#p42').show();
	alert("now your in!, please don't forget to check out as well!");
	localStorage.setItem("status_m", true);
	setTimeout(loadDoca(), 1500);
  });
});

$(document).ready(function(){
  $("#b1").click(function(){
   $(this).hide();
	$("#c3").show();
	$('#p40').hide();
  $('#p41').hide();
  $('#p42').hide();
	$('#checkas').hide();
	localStorage.removeItem("status_m");
	setTimeout(loadDoca(), 1000);
  });
});
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
function loadDoci(str) {
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("check").innerHTML = this.responseText;
    }
  };
 
  xhttp.open("GET", "gather-app-manager_in.php?q="+str, true);
  xhttp.send();
  
}
function loadDoci2() {
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("check").innerHTML = this.responseText;
    }
  };
 
  xhttp.open("GET", "gather-app-manager_out.php", true);
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
 
  xhttp.open("GET", "manager-guest_check.php?q="+str, true);
  xhttp.send();
  }
  
}

$(document).on('click', '.button32', function () {

$('#checkas').show();
setTimeout(function () {document.getElementById('foo').style.display='none'},2200);
setTimeout(loadDoca(), 1500);	
});

$(document).ready(function(){
setTimeout(function () {document.getElementById('foo4').style.display='none'},2200);
});	
 </script>










</body>
</html>