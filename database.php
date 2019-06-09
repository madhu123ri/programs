<?php
$name=$_GET['fname'];
$lname=$_GET['lname'];
$mail=$_GET['ename'];
$password=$_GET['Epwd'];
$password1=$_GET['Rpwd'];
$conn=mysqli_connect('localhost','root',' ','madhu') or die("DATABASE CONNECTION FAILED");
$query="INSERT INTO `register`(`FirstName`, `LastName`, `Mail-id`, `pwd1`, `pwd2`) VALUES ('$name','$lname','$mail','$password','$password1')";
mysqli_query($conn,$query) or die("insertion failed");
echo "REGISTERED SUCCESSFULLY";
?>