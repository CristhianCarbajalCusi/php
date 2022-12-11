 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../estilo/estilos.css">
</head>
<body>
    <?php
        include("cabeceraMenu.php");
        echo "<h1>Menu de Opciones</h1>";
        
    ?>
    <table>
        <thead>

        <?php

            require_once("../database.php");
            $conexionDatabase = new Conexion;
            $conn = $conexionDatabase->conectar();
            $results = $conn->query("call muestraUsuario()");
            $cont = 1;
            while($row=$results->fetch_array(MYSQLI_ASSOC)){

        ?>

        </thead>
        <tbody>

               <tr>
                    <td>Nombre: <?php ECHO $row["nombre"]?></td>
               </tr> 
               <tr>
                    <td>Contraseña <?php ECHO $row["contraseña"]?></td>
               </tr>
            <?php $cont = $cont+1; 
            
            }?>
        </tbody>
    </table>
</body>
</html>