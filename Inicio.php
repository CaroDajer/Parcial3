//y nos va mandar a esta
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="tuneado.css">
    
</head>
<body>
    <form method="post">
    <h1> <legend class= dt>DOBLE T MATUTINO</h1> </legend>
        <h3>Bienvenido al blog de noticias!! con doble t matutino</h3>
        <input type="submit" name="nuevo">
    </form>
    <?php $conex=mysqli_connect("localhost", "root", "", "inicio") 
          include(NuevArch.php);
    ?>

</body>
</html>