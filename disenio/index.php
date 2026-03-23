<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login - Agradece en Compañía</title>
    <link rel="stylesheet" href="../estilos/style.css">
</head>
<body>
    <header>
        <h1>Agradece en Compañía</h1>
        <hr/>
    </header>

    <main>
        <form action="">
            <h2>Inicia sesión</h2>
            
            <label for="email">Correo electrónico</label>
            <input type="email" id="email" name="email" placeholder="tu@email.com">

            <label for="pass">Contraseña</label>
            <input type="password" id="pass" name="pass" placeholder="Ingresa tu contraseña">

            <div>
                <input type="checkbox" id="recordar" name="recordar"> 
                <span>Recordarme</span>
                <a href="">¿Olvidaste tu contraseña?</a>
            </div>

            <button type="submit">Enviar</button>
        </form>
    </main>

    <footer>
        <hr/>
        <div>
            <img src="../img/ImagenFooter.png" alt="Logo">
        </div>
        <hr/>
    </footer>
</body>
</html>