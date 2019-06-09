<?php 
$conn=mysqli_connect("localhost","root","") or die("error occured to connect databasae");
$db=mysqli_select_db($conn,"foods") or die("database is not connected");

echo "<h1 align=center><font color='orange'> </font></h1>";
$user=$_GET['hmail'];
$pwd=$_GET['hpwd'];

$query="select * from reg where username='$user'";
$result=mysqli_query($conn,$query) or die("Query failed:" .mysqli_error($conn));

$row=mysqli_fetch_array($result);

$dpwd=$row['password'];
$duser=$row['email'];
if($duser==$user && $dpwd==$pwd)
{
    echo "<html><body bgcolor='pink'> <h3 align=center><big>HELLO Mr/Mrs/Miss $user<br>Your Login is success</h3></big>";
    echo "<h3 align=center><big>Enjoy our service.........!!!!!!!!!!!!!!</h3></big>";
}
else
{
echo "<html><body bgcolor='grey'>
              <h1 align=center><big>HELLO Mr $user<br>Your Login is success</h1></big>";
    echo "<h3 align=center><big>Enjoy our service.........!!!!!!!!!!!!!!</h3></big>";
}

mysqli_close($conn);
?>