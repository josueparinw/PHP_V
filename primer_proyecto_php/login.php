<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <title>Login</title>
</head>
<body>

    <section class="form-login">
    <form  class="login" action="./controllers/middleware.php" method="post">

        <h3>Inicia sesión</h3>
        <div class="usuario">
            <label for="user">Usuario: </label>
            <input type="text" id="user" required>
        </div>
        <div class=passwd>
            <label for="password">Contraseña: </label>
            <input type="password" id="password" required>

        </div>
        <button type="submit" class="login-b">Enviar</button>
    </form>
    </section>

</body>
</html>