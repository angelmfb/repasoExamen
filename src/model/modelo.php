<?php

class Modelo {
    public $conexion;
    function __construct(){
        require_once __DIR__. '/../php/conexion.php';
        $conexion=new Conexion();
        $this->conexion=$conexion->conexion();
    }
    function cierroSesion(){
        unset($_SESSION['idCliente']);
        session_destroy();
        echo('La sesión se ha cerrado correctamente');
        header("Refresh:2; url=../../index.php");
    }
    function iniciarSesion(){
        $stmt=$this->conexion->prepare("SELECT idCliente,nombre FROM cliente WHERE nombre=? AND password=?;");
        $stmt->bind_param("ss",$_POST['nombreusuario'],$_POST['password']);
        $stmt->execute();
        $resultado=$stmt->get_result();
        while($fila=$resultado->fetch_assoc()){
            $_SESSION['idCliente']=$fila['idCliente'];
            echo ("Se ha iniciado sesión con el usuario ". $fila['nombre']);
        }
        
    }
    function consultar($consulta){
        return $this->conexion->query($consulta);
    }
    function alta(){
        $nombre=$_POST['nombreusuario'];
        $password=$_POST['password'];
        $direccion=$_POST['direccion'];
        $consulta="INSERT INTO cliente (nombre,password,direccion) VALUES ('$nombre','$password','$direccion');";
        if($this->consultar($consulta)){
            echo('Consulta realizada');
        }else{
            echo('La consulta no se realizó correctamente');
        }
    }
    function eliminar(){
        $nombre=$_POST['nombreusuario'];
        $consulta = "DELETE FROM cliente WHERE nombre='$nombre';";
        if($this->consultar($consulta)){
            echo('Usuario eliminado');
        }else{
            echo('La consulta no se realizó correctamente');
        }
    }
    function listar(){
        $consulta = "Select idCliente, nombre, direccion  FROM cliente;";
        /* //foreach ($resultado as $nomb => $valor){
        while ($fila=mysqli_fetch_array($resultado)) {
            echo "NOMBRE: ".$fila[0]." ";
            echo "DNI: ".$fila[1]."</br>";
        }*/
        if($this->consultar($consulta)){
            echo('Consulta realizada');
        }else{
            echo('La consulta no se realizó correctamente');
        }
    }
    function modificar(){
        $consulta = "UPDATE Cuadernos SET textoPortada = ?, textoContraPortada = ?, imagen = ? WHERE idUsuario = ?";
        if($this->consultar($consulta)){
            echo('Usuario modificado');
        }else{
            echo('La consulta no se realizó correctamente');
        }
    }
}
?>