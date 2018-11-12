<?php
if(isset($_POST['btn']))
{
	$icode=$_POST['code'];
	$units=$_POST['units'];
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
	case 'WM01':
	$tprice=$units*649;
	break;
	case 'WM02':
	$tprice=$units*499;
	break;
	case 'WM03':
	$tprice=$units*408;
	break;
	case 'WM04':
	$tprice=$units*399;
	break;
	case 'WM05':
	$tprice=$units*330;
	break;
	case 'WM06':
	$tprice=$units*1590;
	break;
	case 'WM07':
	$tprice=$units*475;
	break;
	case 'WM08':
	$tprice=$units*590;
	break;
	}
$srv="localhost";
$usr="root";
$psk="";
$db="onlinepurchase";
$con=Mysql_connect($srv,$usr,$psk);
$dat=mysql_select_db($db,$con);
if($dat)
{ 
$pinc=$_POST['pinc'];
	$order_no=rand(10000,90000);
	$icode=$_POST['code'];
	$name=$_POST['custname'];
	$mob=$_POST['mob'];
	$units=$_POST['units'];
	$email=$_POST['email'];
	$add=$_POST['add'];
		$senddata=mysql_query("INSERT INTO `sales` (`item_code`, `customer_name`, `mobile_no`, `units`, `total_price`, `pincode`, `Address`, `E-mail`, `order_no`) VALUES('$icode','$name','$mob','$units','$tprice','$pinc','$add','$email','$order_no')");
		if($senddata)
		{	
		echo "<table border=4>";
		echo "<tr>"."<th>"."ITEMCODE"."</th>"."<th>"."CUSTOMER_NAME"."</th>"."<th>"."mobile_no"."</th>"."<th>"."NO_OF_ITEMS"."</th>"."<th>"."E-MAIL"."</th>"."<th>"."Pincode"."</th>"."<th>"."ADDRESS"."</th>"."<th>"."ORDER_no"."</th>"."<th>"."TOTALPRICE"."</th>"."</tr>";
		echo "<tr>"."<td>".$icode."</td>";
		echo "<td>".$name."</td>";
		echo "<td>".$mob."</td>";
		echo "<td>".$units."</td>";
		echo "<td>".$email."</td>";
		echo "<td>".$pinc."</td>";
		echo "<td>".$add."</td>";
		echo "<td>".$order_no."</td>";
		echo "<td>".$tprice."</td>"."</tr>";
		echo "</table>";
		}
	}
	}
?>