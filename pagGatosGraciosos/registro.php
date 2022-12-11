<?php
            require("database.php");
            $conexionDatabase = new Conexion;
            $conn = $conexionDatabase->conectar();
            
            if(isset($_POST['Enviar'])){
                     
                    $nombre=$_POST['nombre'];
                    $contraseña_cifrada = password_hash($_POST['contraseña'],PASSWORD_BCRYPT);
                    $aver=password_hash($_POST['contraseña'],PASSWORD_DEFAULT);
                    $resuts = $conn->query("call muestraUsuario()");
                    $encontrado = 0;
                    while($row = $resuts->fetch_array(MYSQLI_ASSOC)){
                        # VericandoError :: echo "comparando ",$nombre," con ",$row["nombre"]," == ",strcmp($nombre ,$row["nombre"]);
                        if(strcmp($nombre ,$row["nombre"])==0){
                             $encontrado = 1;
                            ECHO "esto es una contraseña descriptada : ",$aver;
                        }
                    }
                    # Cerrando despues de hacer uso los datos a comparar
                    # --------------------------------------------------
                    $conn->close();
                    if($encontrado==0){
                      

                            $conn = $conexionDatabase->conectar();
                            #$sql = "insert into usuarios(nombre,contraseña) values(?,?)";
                            $conn->query("call insertaUsuario('$nombre','$contraseña_cifrada')");
                            echo "Registro con Exito!";
                       
                    }else {
                        echo "El dato ya existe, vuelva intentar el Registro";
                    }
                    #$stmt = $conn->prepare($sql);
                    #$stmt->bind_param("ss",$nombre,$contraseña_cifrada);
                    #$stmt->execute();
                    
                
                
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
    <h1>Registrarse</h1>
    <form action="registro.php" method="post">
        <input type="text" name="nombre" placeholder="nombre">
        <input type="text" name="contraseña" placeholder="Contraseña">
        <input type="text" name="confirmarContraseña" placeholder="confirmar contraseña">
        <input type="submit" name="Enviar" value="Enviar">
         
    </form>
    

</body>
</html>
 