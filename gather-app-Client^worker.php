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
  text-align:left;
  
   
}
p{
   
   font-size: 24px; 
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
#b1{ background-color: #f4511e;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  cursor: pointer;
  border: 2px solid grey;
   border-radius: 4px;
   align:center;
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
#gm{ background-color: #3CBC8D;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  cursor: pointer;
  border: 2px solid grey;
   border-radius: 4px;
   align:center;
   }


   .checkbutton{ background-color: #3CBC8D;
  border: none;
  color: white;
  padding: 8px 16px;
  text-decoration: none;
  cursor: pointer;
  border: 2px solid grey;
   border-radius: 4px;
   align:center;
   }
</style>

</head>
<body>
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
 ?> </a> <a href="gather-app-Worker.php"><i class="fa fa-home"></i> Home</a>
 <a href="gather-app-Worker-manual.php" ><i  class ="fas fa-store-alt"></i>Store presence update</a>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="gather-app-Client^worker.php"><i class='fab fa-drupal'></i> Client-app</a>
  <a href="settings_worker.php"><i class="fas fa-cogs"></i> settings</a>
  <a href="rate_us^worker.php"><i class="fas fa-grin-stars"></i> rate us</a>
  <a href="gather-home.php"><i class="fas fa-sign-out-alt"></i> log-out</a>
</div>
<div class="sticky"><b id="clock" style="font-family:Baumans;font-size:48px; float:right;"></b>

<div id="main">
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span></div>
<button id="b1" type="button" onclick="loadDoca()">check out</button>
</div>
<h1>gather blocker <br> <img src="pics/gathering.png"><br></h1>
<h2 style='font-family:Baumans'>"go out when it's safe" !<br><br><br> 

<div id="check"><b style="font-family:Baumans;font-size:24px;"></b></div>





<div id="checkO"><b style="font-family:Baumans;font-size:24px;"></b></div>

<form>
<select id="f4" name="users" onchange="loadDoc(this.value)">
    <option value=" ">select a city</option>
    
  
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
        $records = mysqli_query($conn, "SELECT DISTINCT  `city` FROM `shops` WHERE 1");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['city'] ."'>" .$data['city']."</option>";  // displaying data in option menu
        }	
    ?>  
  
  </select>
</form>

<form>
<select id="f5" name="category" onchange="loadDoc2(this.value)">
      <option value=" ">select a category</option>
    
</form><?php 
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
        $records = mysqli_query($conn, "SELECT DISTINCT  `category` FROM `shops` WHERE 1");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['category'] ."'>" .$data['category']."</option>";  // displaying data in option menu
        }	
    ?>  
  
  </select>
</form><br><br><br>




<div id="demo"><b style="font-family:Baumans;font-size:24px;">shops info will be listed here...</b></div>


<br><br>

<h2 style='font-family:Baumans'>full buisness list</h2>




<form>
<select id="f1" name="id" onchange="loadDocs(this.value)">
  <option value=" ">select the buisness</option>
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
        $records = mysqli_query($conn, "SELECT `id`, `name`, `addess`, `city`, `max-capacity`, `category`, `user-name`, `real-time`
		FROM `shops` WHERE 1");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['id'] ."'>" .$data['id'].">".$data['name']."</option>";  // displaying data in option menu
        }	
    ?>  
  
  </select>
</form>
<?
mysqli_close($conn);
?>
<div id="divik"><p align="center" style='font-family:Baumans'><button id="gm" type="button" ><i class="fas fa-map-marked-alt"></i>  map</button></p>
<p align="center" style='font-family:Baumans'><iframe style="display:none" id="if3" src="maps.php" height="400" width="500" ></iframe></p></div>
<br><br><br>

<h2 style='font-family:Baumans'>Search</h2>
<!-- Text input to enter the employee's name -->
<p align=center > <i class="fas fa-search"></i> <input type="text" id="employee_name"></input><br>
    <!-- Our search button -->
    <input type="button" id="search_button" value="Search">
    <!-- This div will contain a list of all employee names that match our search term -->
    <div id="search_results" style="padding:5px;"></div></p>
 
<!-- JQuery library -->
  



<script>

//Add a JQuery click listener to our search button.
$('#search_button').click(function(){
        //If the search button is clicked,
        //get the employee name that is being search for
        //from the search_box.
        var employee_name = $('#employee_name').val().trim();
 
        //Carry out a GET Ajax request using JQuery
        $.ajax({
            //The URL of the PHP file that searches MySQL.
            url: 'get_results.php',
            data: {
                name: employee_name
            },
            success: function(returnData){
                //Set the inner HTML of our search_results div to blank to
                //remove any previous search results.
                $('#search_results').html('');
                //Parse the JSON that we got back from search.php
                var results = JSON.parse(returnData);
                //Loop through our employee array and append their
                //names to our search results div.
                $.each(results, function(key, value){
                    //The name of the employee will be present
                    //in the "name" property.
                    $('#search_results').append('<p align=center>results: <button onclick="loadDocs(this.value)" class="checkbutton" value="'+value.id+'">check in:'+value.name+'</button><br>'+value.address+'</p>');
                });
                //If no employees match the name that was searched for, display a
                //message saying that no results were found.
                if(results.length == 0){
                    $('#search_results').html('No shops found!');
                }
            }
        });
    });






$(document).ready(function(){
  $("#gm").click(function(){
	$("#if3").toggle();  
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
var stats = localStorage.getItem("status");
if(stats!==null){
	$(document).ready(function(){
	  $("#b1").css('display', 'inline-block');
	  $("#f1").hide();
    $(".checkbutton").hide();
    $("#search_results").hide();
	  alert("welcome back,if you got out the buisness please check out");
	});
}
$(document).on('click', '.checkbutton', function () {
    $("#b1").css('display', 'inline-block');
    $('.checkbutton').hide();
    $("#search_results").hide();
	$("#f1").hide();
	localStorage.setItem("status", true);
	if($("#f4").val()!=" ")
	setTimeout(loadDoc($("#f4").val()),2000);
    if($("#f5").val()!=" ")
	setTimeout(loadDoc2($("#f5").val()),2000);
	
});


$(document).ready(function(){
  $("#b1").click(function(){
    $(this).hide();
  $('.checkbutton').show();
  $("#search_results").show();
	localStorage.removeItem("status");
	$("#f1").show();
	if($("#f4").val()!=" "){
	setTimeout(loadDoc($("#f4").val()), 3000);}
	 if($("#f5").val()!=" "){
	setTimeout(loadDoc2($("#f5").val()), 3000);}
  });
});


$(document).ready(function(){
  $("#f1").change(function(){
    if($("#f1").val()==" ") return; 
	else{
    localStorage.setItem("status", true);
    alert("now your in!, please don't forget to check out as well!");
	$(this).hide();
	$("#b1").css('display', 'inline-block');
	if($("#f4").val()!=" ")
	setTimeout(loadDoc($("#f4").val()), 2500);
    if($("#f5").val()!=" ")
	setTimeout(loadDoc2($("#f5").val()), 2500);
	}
  });
});

$(document).ready(function(){
  $("#f4").change(function(){
	$("#f5").val(" ");  
 });
});

$(document).ready(function(){
  $("#f5").change(function(){
	$("#f4").val(" ");  
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

$(document).ready(function() {
    $('.checkbutton').click(function() {
	 $("#b1").show();
     $('.checkbutton').hide();
	 
    });
});
</script>

</body>
</html>












</body>

</html>
