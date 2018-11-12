<?php
$srv="localhost";
$usr="root";
$psk="";
$db="onlinepurchase";
$con=Mysql_connect($srv,$usr,$psk);
$dat=mysql_select_db($db,$con);
if(isset($_POST['btn']))
{
if($dat)
{
send();
}
}
function send()
{
	$mob=$_POST['mob'];
	mysql_query("DELETE FROM `sales` WHERE `order_no` = '$mob'");
		echo "<h1>"."Order deleted..........."."</h1>";
}
?>