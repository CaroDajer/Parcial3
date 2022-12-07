//en esta pagina iniciamos
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Archivo</title>
</head>
<body>
    <p>Comienza añadir tu nuevo artículo (: </p>
        <h3> Titulo: <input type="text" name="titulo" class="uno"> </h3>
        <h3> URL de la imagen: <input type="text" name="URL" class="dos"></h3>
        <h3>Descripcion: <input type="text" name="descripcion" class="tres"></h3>
        <h3> Nombre del autor: <input type="text" name="autor" class="uno"> </h3>
        <h3>Fecha de publiacion: <input type="date" name="dia" class="cuatro"></h3>
        <input type="submit" name="nuevo">  
</body>
<?php $conex=mysqli_connect("localhost", "root", "", "inicio") ?>
</html>