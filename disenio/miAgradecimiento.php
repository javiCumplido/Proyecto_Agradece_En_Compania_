<?php

    function conectar(){
        $conexion = new mysqli('esvirgua.com', 'user1daw_07', 'Y$0$m.5jUa.+1d3,', 'user1daw_BD1-07');

        $conexion->set_charset("utf8");

        return $conexion;
    }
    session_start();
    $conexion = conectar();
    $sql1 = "SELECT nombre FROM Usuario WHERE NIA = '" . $_SESSION["idSesion"] . "'";
    $resultado = $conexion->query($sql1);
    if ($resultado->num_rows == 1){
        $fila1 = $resultado->fetch_array();
    }

    $sql1 = "SELECT idUsuarioEmisor, mensaje FROM Agradecimiento WHERE idAgradecimiento = '" . $_GET["id"] . "'";
    $resultado = $conexion->query($sql1);
    if ($resultado->num_rows == 1){
        $fila = $resultado->fetch_array();
        $emisor = $fila["idUsuarioEmisor"];
        $mensaje = $fila["mensaje"];
    }
    $sql2 = "SELECT nombreJesuita, informacionJesuita, web FROM Usuario WHERE NIA = '" . $emisor . "'";
    $resultado = $conexion->query($sql2);
    if ($resultado->num_rows == 1){
        $fila2 = $resultado->fetch_array();
    }

?>

<!DOCTYPE html>


<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Recibir - Agradece en Compañía</title>
    <link rel="stylesheet" href="../estilos/style.css">
</head>

<body>
    <header>
        <h1>Agradece en Compañía</h1>
        <hr />
    </header>

    <main>
        <h2>Para <?php echo $fila1["nombre"]; ?></h2>
        <article>
            <section>
               <div>
                    <img src=<?php echo "\"" . "./" . str_replace(" ","",$fila2["nombreJesuita"]) . ".png\""?> alt="Perfil">
                </div>
                <p><strong>Jesuita: <?php echo $fila2["nombreJesuita"]; ?></strong></p>
                <p><?php echo $fila2["informacionJesuita"] ?></p>
            </section>

            <section>
                <h3>Mensaje:</h3>
                <p>
                    <?php 
                        echo $mensaje;
                    ?>
                </p>
            </section>
        </article>
    </main>

    <footer>
        <hr />
        <div>
            <img src="../img/imagenFooter.png" alt="Logo">
        </div>
        <hr />
    </footer>
</body>

</html>