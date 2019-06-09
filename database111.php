<?php


$conn=mysqli_connect('localhost','root',' ','madhu') or die("DATABASE CONNECTION FAILED");
$db=mysqli_select_db($conn,"register")or die("couldn't select database");
echo  "<h1 align=center><font color='orange'>Loginpage</font></h1><hr>";



$mail=$_GET['mail'];
$password=$_GET['pwd'];

$query="select* from register where name='$mail'";
$result=mysqli_query($conn,$query) or die("Query failed:" .mysql_error());
$row=mysql_fetch_array($result);
$duser=$row['Mail-id'];
$dpwd=$row['pwd1'];
if($duser==$mail && $dpwd==$pwd)
{
echo "<html><body bgcolor='pink'>";
echo "<h3 align=center><b> Hello Mr./Mrs. $ename <br>Your Login Success </h3></b>";
}
else
{


echo "<html><body bgcolor='pink'>";
echo "<h3 align=center><b> Hello Mr./Mrs. $ename <br>Your Login Failed</h3></b>";
}
?>