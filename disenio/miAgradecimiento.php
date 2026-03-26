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

    <nav>
        <a href="./agradecimiento.php">Agradecer</a>
        <a href="#">Recibir</a>
        <a href="../programacion/cerrarSesion.php">Cerrar Sesión</a>
    </nav>

    <main>
        <h2>Para 
        <?php
            include "../programacion/operacionesBD.php";
            session_start();
            $conexion = conectar();
            $sql1 = "SELECT nombre FROM Usuario WHERE NIA = '" . $_SESSION["idSesion"] . "'";
            $resultado = $conexion->query($sql1);
            if ($resultado->num_rows == 1){
                $fila = $resultado->fetch_array();
                echo $fila["nombre"];
            }
            
        ?>
        </h2>
        <article>
            <section>
                <div>
                    <img src="#" alt="Perfil">
                </div>
                <?php 
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
                        $fila = $resultado->fetch_array();
                    }
                ?>
                <p><strong>Jesuita: <?php echo $fila["nombreJesuita"]; ?></strong>

                </p>
                <p><?php echo $fila["informacionJesuita"] ?></p>
            </section>

            <section>
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