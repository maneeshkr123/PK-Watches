<?php
$units=$_POST['units'];
$icode=$_POST['code'];
$tprice=0;
switch($icode)
{
	case 'SN01':
	$tprice=$units*1399;
	break;
	case 'SN02':
	$tprice=$units*1549;
	break;
	case 'SN03':
	$tprice=$units*1499;
	break;
	case 'SN04':
	$tprice=$units*1199;
	break;
	case 'SN05':
	$tprice=$units*1899;
	break;
	case 'SN06':
	$tprice=$units*1999;
	break;
	case 'SN07':
	$tprice=$units*1299;
	break;
	case 'SN08':
	$tprice=$units*1199;
	break;
	case 'SN09':
	$tprice=$units*2999;
	break;
	case 'TI01':
	$tprice=$units*1399;
	break;
	case 'TI02':
	$tprice=$units*1549;
	break;
	case 'TI03':
	$tprice=$units*1499;
	break;
	case 'TI04':
	$tprice=$units*1199;
	break;
	case 'TI05':
	$tprice=$units*1899;
	break;
	case 'TI06':
	$tprice=$units*1999;
	break;
	case 'TI07':
	$tprice=$units*1299;
	break;
	case 'TI08':
	$tprice=$units*1199;
	break;
	case 'FT01':
	$tprice=$units*1399;
	break;
	case 'FT02':
	$tprice=$units*1549;
	break;
	case 'FT03':
	$tprice=$units*1499;
	break;
	case 'FT04':
	$tprice=$units*1199;
	break;
	case 'FT05':
	$tprice=$units*1899;
	break;
	case 'FT06':
	$tprice=$units*1999;
	break;
	case 'FT07':
	$tprice=$units*1299;
	break;
	case 'FT08':
	$tprice=$units*1199;
	break;
	case 'FT09':
	$tprice=$units*2999;
	break;
	}
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
send($tprice);
}
}
function send($tprice)
{
	$pinc=$_POST['pinc'];
	$icode=$_POST['code'];
	$name=$_POST['custname'];
	$mob=$_POST['mob'];
	$units=$_POST['units'];
	$email=$_POST['email'];
	$add=$_POST['add'];
	$order=$_POST['order_no'];
		$senddata=mysql_query("UPDATE `sales` SET `item_code` = '$icode', `customer_name` = '$name', `E-mail` = '$email', `units` = '$units', `total_price` = '$tprice', `mobile_no` = '$mob', `pincode` = '$pinc', `Address` = '$add' WHERE `order_no` = '$order'");
		echo "<table border=4>";
		echo "<tr>"."<th>"."ITEMCODE"."</th>"."<th>"."CUSTOMER_NAME"."</th>"."<th>"."mobile_no"."</th>"."<th>"."NO_OF_ITEMS"."</th>"."<th>"."E-MAIL"."</th>"."Pincode"."</th>"."<th>"."ADDRESS"."</th>"."<th>"."TOTALPRICE"."</th>"."</tr>";
		echo "<tr>"."<td>".$icode."</td>";
		echo "<td>".$name."</td>";
		echo "<td>".$mob."</td>";
		echo "<td>".$units."</td>";
		echo "<td>".$email."</td>";
		echo "<td>".$pinc."</td>";
		echo "<td>".$add."</td>";
		echo "<td>".$tprice."</td>"."</tr>";
		echo "</table>";
		echo "<h1>"."details updated..........."."</h1>";
	}

?>