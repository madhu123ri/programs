<?php
$conn=mysqli_connect("localhost","root","") or die("DATABASE IS NOT CONNECTED");
$db=mysqli_select_db($conn,"foods") or die("couldn't connected database");
$num1=($_POST['num1']);
$num2=($_POST['num2']);
$func=($_POST['func']);
$query="select * from calc where num1='$num1' and num2='$num2' and func='$func'";
$result=mysqli_query($conn,$query) or die("QUERY FAILED:" .mysqli_error($conn));
$nr=mysqli_num_rows($result);
if($nr==0)
{
if(is_numeric($num1)&&is_numeric($num2))
{
if($func != null)
{
switch($func)
{
case "+": $ans=$num1+$num2;
break;
case "-": $ans=$num1-$num2;
break;
case "*": $ans=$num1*$num2;
break;
case "/": $ans=$num1/$num2;
break;
case "%": $ans=$num1%$num2;
break;
}

echo "<h1>calculation result:" .$ans;
$query="insert into calc values($num1,$num2,'$func',$ans)";
$result=mysqli_query($conn,$query);
}
}
}
else
{
$row=mysqli_fetch_array($result);
$ans=$row['answer'];
echo "<h1><b> RESPONSE FROM DATABASE</b></h2>";
echo "<h3> calculation result:".$ans;
}
?>
