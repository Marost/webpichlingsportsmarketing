<?php
include ("../../../conexion/conexion.php");
include ("../../../conexion/funciones.php");

//DECLARACION DE VARIABLES
$categoria=$_POST["categoria"];
$url=getUrlAmigable(eliminarTextoURL($categoria));
$imagen=$_POST["imagen"];

mysql_query("UPDATE ".$tabla_suf."_empresa_enlaces_categoria SET categoria='$categoria', imagen=$imagen, url='$url' WHERE id=".$_REQUEST["id"].";", $conexion);
	
if (mysql_errno()!=0)
{
	echo "error al insertar los datos ". mysql_errno() . " - ". mysql_error();
	mysql_close($conexion);
	//header("Location:listar.php?mensaje=5");
} else {
	mysql_close($conexion);
	header("Location:listar.php?mensaje=2");
}

?>