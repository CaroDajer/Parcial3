<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="tuneado.css">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="fondoInicio">
        <h1>
            <legend class=dt>DOBLE T MATUTINO </legend>
        </h1>
        <h3>Bienvenido al blog de noticias!! con doble t matutino</h3>
        <a href="./NuevArch.php"> <button>Crear artículo</button> </a>
    </div>

    <br>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Titulo</th>
                <th scope="col">URL Imagen</th>
                <th scope="col">Descripción</th>
                <th scope="col">Autor</th>
                <th scope="col">Fecha</th>
            </tr>
        </thead>
        <tbody>

        <?php

            include "./Conecta4.php";

            $Sql = "SELECT * FROM articulos ORDER BY Fecha DESC";

            $Resultado = $ConexionDB->query($Sql);

            if( $Resultado->num_rows > 0 ){

                while($Datos = $Resultado->fetch_assoc()){

                    echo "<tr>";

                    echo "<th scope='row'>" .$Datos['idArticulos']. "</th>";

                    echo "<td>" .$Datos['Titulo']. "</td>";
                    echo "<td>" .$Datos['URL_Imagen']. "</td>";
                    echo "<td>" .$Datos['Descripcion']. "</td>";
                    echo "<td>" .$Datos['Autor']. "</td>";
                    echo "<td>" .$Datos['Fecha']. "</td>";

                    echo "</tr>";

                }

            }

        ?>

        </tbody>
    </table>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>