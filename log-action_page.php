<?php
$get_name=$_POST['fname'];
$get_pas=$_POST['lname'];

echo $get_name;
echo $get_pas;


$conect = mysql_connect('localhost','root','root')or die('error could not connect to DB');

$db=mysql_select_db('gather-blocker',$conect)or die('error could not select to DB');


$query ="INSERT INTO `customers`(`id`, `first-name`, `last-name`, `user-name`, `password`) VALUES (null,$get_name,'daichman','lior376',$get_pas)";

mysql_query($query);






?>