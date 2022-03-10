<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="amfernandezbanos.guadalupe@alumnado.fundacionloyola.net">
        <title>Subida de Archivos</title>
    </head>
    <body>
        <?php
            $directorio='../uploads/'; //Directorio donde se van a subir los ficheros o archivos
            $tmp_name=$_FILES["fichero"]["tmp_name"]; //Nombre y ruta temporal del fichero
            $name = basename($_FILES["fichero"]["name"]);
            $tipo=$_FILES["fichero"]["type"]; //Tipo del archivo subido
            $tamaño=$_FILES["fichero"]["size"]; //Tamaño del archivo subido
            if($tipo=="image/png"||$tipo=="image/jpg"||$tipo=="application/pdf"){
                if($tamaño > 20971520){
                    echo "El tamaño del archivo es muy grande, elija otro archivo más pequeño";
                }else{
                    $dir_subida=$directorio.$name; //Directorio + nombre del fichero
                    move_uploaded_file($tmp_name, $dir_subida); //Muevo el fichero o archivo de la ruta temporal a el directorio de subida
                    echo 'Archivo subido correctamente';
                }
            }else{
                echo 'El archivo no se ha subido correctamente, utilice una extensión .png .jpg o .pdf';
            }
            echo '<br /><a href="../../index.php">Volver al inicio</a>'
        ?>
    </body>
</html>