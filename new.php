<?php
$user=$_GET['huser'];
$pwd=$_GET['hpwd'];
$mail=$_GET['hmail'];
$conn=mysqli_connect('localhost','root','') or die("database connection failed");
$db=mysqli_select_db($conn,"foods") or die("DB selection faailed");
$query="INSERT INTO `reg` (`username`, `password`, `email`) VALUES ('$user', '$pwd', '$mail')";
mysqli_query($conn,$query)or die("re faailed");; 
echo "inserted successfully";
?>