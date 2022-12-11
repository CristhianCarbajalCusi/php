<?php
    require("database.php");

    $conexionDatabase = new Conexion;
    $conn = $conexionDatabase->conectar();
    if(isset($_POST["Ingresar"])){

        $nombre=$_POST["nombre"];
        $contraseña=$_POST["contraseña"];
        $results = $conn->query("call muestraUsuario()");
        $encontrado = 0;
        while($row = $results->fetch_array(MYSQLI_ASSOC)){
            if(password_verify($contraseña,$row["contraseña"])){
                echo "entramos al menu";
                $encontrado = 1;
                header("Location: app/contenido.php");
            }
        }
        if($encontrado==0){
            echo "Usuario Incorrecto , vuelva a logearse, :D";
        }
        


    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo/estilos.css">
 
</head>
<body>
    <?php
            include("parche/cabecera.php");
    ?>
    <h1>Login</h1>
    <form action="login.php" method="post">
        <input type="text" name="nombre" placeholder="nombre">
        <input type="text" name="contraseña" placeholder="contraseña">
        <input type="submit" name="Ingresar" value="Ingresar">
    </form>
</body>
</html>