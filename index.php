<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookies</title>
</head>
<body>
    <h2>INICIO DE SESIÓN</h2>
    <form id="loginForm" action="lectura1.php" method="post">
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username" required>
        <br><br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
        <br><br>
        <input type="submit" value="Iniciar sesión">
    </form>
    <a href="cerrarSesion.php">Salir y borrar cookies</a><br>
</body>
</html>

<?php
//$_COOKIE[] Lee las cookies del ordenador:
if(isset($_COOKIE["nombre"])) {
    echo "Hola " . $_COOKIE["nombre"] . "<br>";
}
if(isset($_COOKIE["nombre"])) {
    echo "Tu último acceso fue ".$_COOKIE["ultimoAcceso"];
}
