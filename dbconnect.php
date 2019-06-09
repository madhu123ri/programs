<?php 
$con=mysqli_connect('localhost','root','');
if(!$con)
{
 echo "not connected to database";
 }
 if(!mysqli_select_db($con,'register'))
 {
 echo "database not selected";
 }
 ?>
 