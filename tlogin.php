<?php
session_start();
$user=$_GET['huser'];
$time=time();
$t1=date('H:i:s');
$_SESSION["name"]=$user;
$_SESSION["t1"]=$time;
echo "<html><body bgcolor='lightgreen'>";
echo "<h3 align='right'><b>START TIME: $t1 <br></h3></b>";
echo "<h4 align ='right'><a href=tlogout.php>SIGNOUT</a></h4>";
echo "<h2 align ='center'>HELLO mr./mrs $user <br>Yourlogin is success</h2></b>";
echo "<h2 align ='center'>enjoy our service.............</h3></b>";
echo "</body></html>";
?>