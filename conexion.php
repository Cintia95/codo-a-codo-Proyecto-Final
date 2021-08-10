<?php
//conecta al servidor
$host="localhost";
$basededatos="conquistadores";
$usuariodb="root";
$clavedb="";

$conectar=mysqli_connect($host,$usuariodb,$clavedb,$basededatos);

//verifica la conexion
if($conectar->connect_errno){
    echo "Error de conexion";
	exit();
}

?>