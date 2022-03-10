<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="amfernandezbanos.guadalupe@alumnado.fundacionloyola.net">
        <title>Subida de Archivos</title>
    </head>
    <body>
        <h1>Directorio de Subida</h1>
        <h4>Haz click en los enlaces de los archivos y los abrirá</h4>
        <?php
            $directorio='../uploads/';
            if(is_dir($directorio)){
                $abrirDirectorio=opendir($directorio);
                while(($archivo=readdir($abrirDirectorio))!== false){
                    //Se muestran todos los archivos y carpetas excepto "." y ".."
                    if ($archivo != "." && $archivo != "..") {
                        $ruta_abrir_fichero="../uploads/".$archivo;
                        $ruta_abrir_fichero=str_replace(" ","%20",$ruta_abrir_fichero);
                        echo '<a href='.$ruta_abrir_fichero.'>'.$archivo."<br />";
                    }
                }
                closedir($abrirDirectorio);
            }else{
                echo 'Esto no es una ruta válida';
            }
            echo '<a href="../../index.php">Volver al inicio</a>'
        ?>
    </body>
</html>