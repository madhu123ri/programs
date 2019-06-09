<?php
session_start();
$t2=(time()-$_SESSION["t1"]);
echo "<html><body bgcolor='skyblue'>";
echo "<h3 align='center'><b>THANK YOU mr./mrs" .$_SESSION["name"];
echo "<br> your logout is success </h3></b>";
echo "<h5 align='center'><b>Your Login duration TIME IS: $t2 seconds<br></h5></b>";
echo "</body></html>";
?>