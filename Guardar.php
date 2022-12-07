<?php

$Titulo = $_POST['titulo'];
$URL_Imagen = $_POST['URL'];
$Descripcion = $_POST['descripcion'];
$Autor = $_POST['autor'];
$Fecha = $_POST['dia'];

include './Conecta4.php';

$Sql = "INSERT INTO articulos (Titulo, URL_Imagen, Descripcion, Autor, Fecha) VALUES ('$Titulo', '$URL_Imagen', '$Descripcion', '$Autor', '$Fecha')";

if( $ConexionDB->query($Sql) ){

    //echo "El artículo se guardo correctamente.";
    header("Location: inicio.php");

}else{

    die("Hubo un error al insertar los datos. ".$ConexionDB->error);

}

?>