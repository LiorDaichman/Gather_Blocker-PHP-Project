<!DOCTYPE html>
<html>
<head>
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
#c1{border: 2px solid grey;
   background-color: #3CBC8D;
  color: white;
  border-radius: 4px;}

</style>
</head>
<body>
<ul>
  <li><a href="gather-app-manager.php" >Home</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">sign-up</a>
    <div class="dropdown-content">
      <a href="gather-customer-sign.php">customer</a>
      <a href="gather-Worker-sign.php">employee</a>
      <a href="gather-manager-sign.php">manager</a>
    </div>
  </li>
  <li><a href="gather-contact.htm">Contact</a></li>
  <li><a href="gather-about.htm">About</a></li>
  <li><a href="gather-home.php">log-out</a></li>
   <li><a href="#"><?php session_start();if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
  {echo "Welcome , " . $_SESSION['username'] . "!";} else {echo "Please log in first to see this page.";}?></a></li>
</ul>

<h1><span style='font-size:10vw;'>&#9940;</span> gather blocker <span style='font-size:10vw;'>&#129298;</span></h1>
<h2 style='font-family:Baumans'>"go out when it's safe" !</h2>



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
 


<label for="capacity">capacity:</label><br>
<input type="text" id="capacity" name="capacity" required value=""><br>

<label for="category">category:</label><br>
<input type="text" id="category" name="category" required value=""><br>
  
  



<input type="submit" value="Submit">  
    
 
</form>

<p>in order to see yor shops click </p>
<button id="myBtn1" onclick="document.location='shop-list-manager.php'">shop-list</button><br>


<script>  
var x = document.getElementById("myBtn");
x.addEventListener("click", displayform);

function displayform() {
  document.getElementById("f1").style.display="block";
}
 </script>










</body>
</html>