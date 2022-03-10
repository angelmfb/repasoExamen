<?php

require_once __DIR__ . '/../model/modelo.php';

class Controlador extends Modelo{
    function __construct(){
        parent:: __construct();
    }
    function cerrarSesion(){
        $this->cierroSesion();
    }
    function inicioSesion(){
        $this->iniciarSesion();
    }
    function altaCliente(){
        if($_POST['nombreusuario']==''){    //Compruebo que el nombre de usuario no se queda en blanco
            echo ('No se puede quedar el nombre del usuario en blanco'); 
        }else{
            if($_POST['password']!==$_POST['password2']){   //Compruebo si las contraseñas son iguales o no
                echo ('Las constraseñas no coinciden');
            }else{
                if($_POST['direccion']==''){    //Compruebo que la dirreción no se queda en blanco
                    echo ('La dirreccion no se puede quedar en blanco');
                }else{
                    $this->alta();
                }
            }
        }
    }
    function eliminacion(){
        $this->eliminar();
    }
    function listamiento(){
        $this->listar();
    }
    function modificacion(){
        $this->modificar();
    }
}
?>