<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Login - Agradece en Compañía</title>
    <link rel="stylesheet" type="text/css" href="../estilos/style.css">
</head>

<body>
    <header>
        <h1>Agradece en Compañía</h1>
        <hr />
    </header>

    <main>
        <h2>Registrate</h2>
        <form method="post" action="../programacion/insertarUsuario.php">
            <label for="NIA">NIA</label>
            <input type="text" name="NIA" id="NIA" placeholder="Introduce tu NIA" required />
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" placeholder="Introduce tu nombre de usuario" required />
            <label for="contrasenia">Contraseña</label>
            <input type="password" id="contrasenia" name="contrasenia" placeholder="Introduce tu contraseña" required />
            <label for="jesuita">Jesuita</label>
            <input type="text" name="jesuita" id="jesuita" placeholder="Introduce tu Jesuita" required />
            <label for="informacion">informacion</label>
            <textarea name="informacion" id="informacion" placeholder="Introduce la informacion" required></textarea>
            <button type="submit">Registrarme</button>
        </form>
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