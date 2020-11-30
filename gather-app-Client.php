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
  text-align:left;
  
   
}
p{
    margin-left:150px;
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
   display:inline-block;}
   
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

</style>

</head>
<body>
<ul>
  <li><a href="gather-app-Worker.php" >Home</a></li>
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

<h2 style='font-family:Baumans'>select a city in order to watch available buisnesess</h2>
<form action="gather-app-Client_action.php"target="_self" method="post">
<label for="city">cities:</label><br>
<select name="city" >
    <option value="">Select a city:</option>
    <option value="Afula">Afula</option>
    <option value="Arad">Arad</option>
    <option value="Ashdod">Ashdod</option>
    <option value="Ashkelon">Ashkelon</option>
    <option value="Bat Yam">Bat Yam</option>
    <option value="Beer sheba">Beer sheba</option>
    <option value="Beit She'an">Beit She'an</option>
    <option value="Beit Shemesh">Beit Shemesh</option>
    <option value="Bnei Brak">Bnei Brak</option>
    <option value="Dimona">Dimona</option>
    <option value="Eilat">Eilat</option>
    <option value="Givatayim">Givatayim</option>
    <option value="Hadera">Hadera</option>
    <option value="Haifa">Haifa</option>
    <option value="Herzliya">Herzliya</option>
    <option value="Holon">Holon</option>
    <option value="Jerusalem">Jerusalem</option>
    <option value="Kfar Saba">Kfar Saba</option>
    <option value="Kiryat Ata">Kiryat Ata</option>
    <option value="Kiryat Gat">Kiryat Gat</option>
    <option value="Lod">Lod</option>
    <option value="Netanya">Netanya</option>
    <option value="Nahariya">Nahariya</option>
    <option value="Petah Tikva">Petah Tikva</option>
    <option value="Ra'anana">Ra'anana</option>
    <option value="Ramat Gan">Ramat Gan</option>
    <option value="Ramat HaSharon">Ramat HaSharon</option>
    <option value="Ramla">Ramla</option>
    <option value="Rehovot">Rehovot</option>
    <option value="Rishon LeZion">Rishon LeZion</option>
    <option value="Rosh HaAyin">Rosh HaAyin</option>
    <option value="Tel Aviv-Yafo">Tel Aviv-Yafo</option>
  </datalist><br>
  <input type="submit" value="Submit">  
</form>











</body>

</html>
