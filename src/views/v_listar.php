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
        <title>Listar</title>
    </head>
    <body>
        <header>
            <h1>Listar</h1>
            <nav>
                <ul>
                    <li><a href="./v_registro.php">Registro Usuario</a></li>
                    <li><a href="./v_iniciosesion.php">Inicio Sesión</a></li>
                    <li><a href="./v_eliminar.php">Eliminar</a></li>
                    <li><a href="./v_modificar.php">Modificar</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <h2>Lista de ususarios</h2>
            <form action="#" method="post">
                <label>Pulsa el botón para que salga la lista</label>
                <input type="submit" value="Lista" name="enviar">
            </form>
            <?php
                require_once __DIR__. '/../controller/controlador.php';
                $controlador=new Controlador();
                if(isset($_POST['enviar'])){
                    $controlador->listamiento();
                }
            ?>
        </main>
    </body>
</html>