<?php
    session_start();
    if(isset($_SESSION['idCliente'])){
        header('Location: ../../index.php');
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="amfernandezbanos.guadalupe@alumnado.fundacionloyola.net>">
        <link rel="stylesheet" href="../css/style.css">
        <title>Modificacion</title>
    </head>
    <body>
        <header>
            <h1>Modificacion</h1>
            <nav>
                <ul>
                    <li><a href="./v_registro.php">Registro Usuario</a></li>
                    <li><a href="./v_iniciosesion.php">Inicio Sesión</a></li>
                    <li><a href="./v_eliminar.php">Eliminar</a></li>
                    <li><a href="./v_listar.php">Listar</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <h2>Modificar ususario</h2>
            <form action="#" method="post">
                <label>NombreUsuario:</label>
                <input type="text" placeholder="NombreUsuario" name="nombreusuario">
                <label>Contraseña:</label>
                <input type="password" placeholder="Contraseña" name="password">
                <label>Repetir contraseña:</label>
                <input type="password" placeholder="Repetir contraseña" name="password2">
                <label>Dirección:</label>
                <input type="text" placeholder="Dirección" name="direccion">
                <input type="submit" value="Enviar" name="enviar">
            </form>
            <?php
                require_once __DIR__. '/../controller/controlador.php';
                $controlador=new Controlador();
                if(isset($_POST['enviar'])){
                    $controlador->modificacion();
                }
            ?>
        </main>
    </body>
</html>