<?php 
$conn=mysqli_connect("localhost","root","") or die("error occured to connect databasae");
$db=mysqli_select_db($conn,"foods") or die("database is not connected");

echo "<h1 align=center><font color='orange'>LOGIN PAGE </font></h1>";
$user=$_POST['huser'];
$pwd=$_POST['hpwd'];

$query="select * from register where username='$user'";
$result=mysqli_query($conn,$query) or die("Query failed:" .mysqli_error($conn));

$row=mysqli_fetch_array($result);
$duser=$row['username'];
$dpwd=$row['password'];
if($duser==$user&&$dpwd==$pwd)
{
    echo "<html><body bgcolor='pink'> <h3 align=center><big>HELLO Mr/Mrs/Miss $user<br>Your Login is success</h3></big>";
    echo "<h3 align=center><big>Enjoy our service.........!!!!!!!!!!!!!!</h3></big>";
}
else
{
echo "<html><body bgcolor='pink'>";
         /* <h3 align=center><big>HELLO Mr/Mrs/Miss $user<br>Your login is success</h3></big>"; */
    echo "<h3 align=center><big>Invalid username and password</h3></big>";
}

mysqli_close($conn);
?>