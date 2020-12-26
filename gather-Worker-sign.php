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
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
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
	text-align:center;
    
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
input[type=button], input[type=submit], input[type=reset]{
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
   
   #demo{text-align:center;}
   table {
  width: 100%;
  border-collapse: collapse;
    }

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}

</style>
</head>
<body>



<ul>
  <li><a href="gather-home.php" ><i class="fa fa-home"></i> Home</a></li>
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
</ul>

<h1><span style='font-size:10vw;'>&#9940;</span> gather blocker <span style='font-size:10vw;'>&#129298;</span></h1>
<h2 style='font-family:Baumans'>"go out when it's safe" !</h2>

<?php
session_start();
echo $_SESSION["WpasswordErr"];
echo $_SESSION["WuserErr"];


?>


<p>hello dear worker,please enter your private details</p>

<button id="b1" type="button" onclick="loadshopsDoc()">shop-list</button>

<div id="demo"><b style="font-family:Baumans;font-size:24px;">click the shop list button in order to choose the buisness you work for</b></div>

<form action="Worker_action.php"target="_self" method="post" autocomplete="off">

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
 
<b style="font-family:Baumans;font-size:24px;">enter the id of the shop that you work for</b>
 
<label for="buisness-name"></label><br>

<select id="f1" name="id" onchange="loadDocs(this.value)">
  <option value=" ">select the buisness</option>
  <?php 
        session_start();
        $get_user = $_SESSION['username'];
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "gather-blocker";

// Create connection
        $conn = mysqli_connect($servername,$username,$password,$dbname);

// Check connection
       if (!$conn) {
         die("Connection failed: " . mysqli_connect_error());
         }
        $records = mysqli_query($conn, "SELECT `id`, `name`, `street`, `city`, `max-capacity`, `category`, `user-name`, `real-time`
		FROM `shops` WHERE 1");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['id'] ."'>" .$data['id'].">".$data['name']."</option>";  // displaying data in option menu
        }	
    ?>  
  
  </select>



<input type="submit" value="Submit">  
    
 
</form>
<?
mysqli_close($conn);
?>

<script>

function loadshopsDoc() {
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
  };
 
  xhttp.open("GET", "Worker-sign-shop.php", true);
  xhttp.send();
  
}


</script>

 




</body>
</html>