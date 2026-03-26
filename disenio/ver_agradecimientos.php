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
        <h2>Mis Agradecimientos</h2>
        <article>
            <?php include '../programacion/verMisAgradecimientos.php'; ?>
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