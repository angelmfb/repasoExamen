<?php
    session_start();
    require_once __DIR__. '/../controller/controlador.php';
    $controlador=new Controlador();
    $controlador->cerrarSesion();
?>