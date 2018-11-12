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
get();
}
}
function get()
{
	$mob=$_POST['mob'];
	$showdata=mysql_query("SELECT * FROM `sales` WHERE `order_no` = '$mob'");
	echo "<table border=2 width=100%>";
	echo "<tr>";
	echo "<th>"."item_code"."</th>";
	echo "<th>"."customer_name"."</th>";
	echo "<th>"."mobile_no"."</th>";
	echo "<th>"."units"."</th>";
	echo "<th>"."total_price"."</th>";
	echo "<th>"."pincode"."</th>";
	echo "<th>"."Address"."</th>";
	echo "<th>"."E-mail"."</th>";
	echo "</tr>";
while($row=mysql_fetch_array($showdata))
{
	echo "<tr>";
	echo "<td>".$row["item_code"]."</td>";
	echo "<td>".$row["customer_name"]."</td>";
	echo "<td>".$row["mobile_no"]."</td>";
	echo "<td>".$row["units"]."</td>";
	echo "<td>".$row["total_price"]."</td>";
	echo "<td>".$row["pincode"]."</td>";
	echo "<td>".$row["Address"]."</td>";
	echo "<td>".$row["E-mail"]."</td>";
	echo "</tr>";
}
echo "</table>";
}
	
?>