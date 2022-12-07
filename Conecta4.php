<?php

$Servidor = "localhost";
$UsuarioS = "root";
$ContrasenaS = "";
$BaseDeDatosS = "articulos";

$ConexionDB = new mysqli($Servidor, $UsuarioS, $ContrasenaS, $BaseDeDatosS);

if($ConexionDB -> connect_error){
	die("Hubo un error en conectar la base de datos, el error fue: ".$ConexionDB->connect_error );
}

?>