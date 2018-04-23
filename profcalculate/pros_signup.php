<?php
include ('config.php');
$username=$_POST['username'];
$password=$_POST['password'];
echo"<br>";
$query="insert into user values
('$username','$password')";
if(mysql_query($query)){
header("Location:signin.php");}
else
echo"something went wrong";
?>