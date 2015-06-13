<html>
    <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
    <script src="./libs/jquery-2.1.0.js"></script>
    <link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
    <script src="./libs/validacion/jquery.validate.min.js"></script>
    <script src="./libs/validacion/messages.js"></script>
    <script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
    </head>
    <body>
<?php
include './clases/Coneccion.php';
include './clases/Ciudadano.php';
include './clases/CiudadanoControlador.php';

$ciudadanoA = new CiudadanoControlador();


if(isset($_REQUEST['bot'])){
           $ciudadanoA->setId($_REQUEST['id']);
           $ciudadanoA->setDUI($_REQUEST['dui']);
           $ciudadanoA->setNombre($_REQUEST['nombre']);
           $ciudadanoA->setApellido($_REQUEST['apellido']);
           $ciudadanoA->setFecha($_REQUEST['fecha']);
           $ciudadanoA->setGenero($_REQUEST['genero']);
           $ciudadanoA->setDir($_REQUEST['dir']);
           $ciudadanoA->setDepto($_REQUEST['depto']);
            $ciudadanoA->setMuni($_REQUEST['muni']);
           $datosObj=array($ciudadanoA->getId(),
                           $ciudadanoA->getDUI(),
                           $ciudadanoA->getNombre(),
                           $ciudadanoA->getApellido(),
                           $ciudadanoA->getFecha(),
                           $ciudadanoA->getGenero(),
                           $ciudadanoA->getDir(),
                           $ciudadanoA->getDepto(),
                           $ciudadanoA->getMuni());
            print "<div id='dialogo' title='Exito' style='display: none;'>";
            print '<p>Mensaje: ';
            print $ciudadanoA->modificarDatos($con,$datosObj);
            print '<span class="badge glyphicon glyphicon-ok"></span></p>';
            print '<a href=\'manejadorCiudadano.php?accion=con\'>Ver datos</a>';
            print "</div>";
            

        }
 ?><script>
$(document).ready(function(){
   $("#dialogo").dialog();
});
</script>
      </body>
</html>

