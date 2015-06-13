
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
    <link rel="stylesheet" type="text/css" href="./css/estilo-h.css">
    </head>
    <body>
    <!--menu-->
<div id="menuh">
    <ul>
      <li><a href="dir-form/formularios_admon.php" >Inicio</a></li>
      <li><a href="cerrar.php">cerrar</a></li>
    
    </ul>
  </div>
<!--fin menu-->
<?php
include './clases/ConeccionDui.php';
include './clases/Ciudadano.php';
include './clases/CiudadanoControlador.php';

$ciudadanoA = new CiudadanoControlador();

$accion= $_REQUEST['accion'];
switch ($accion) {
    case 'save':
        if(isset($_REQUEST['bot'])){
           $ciudadanoA->setId('NULL');
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
                         
           print $ciudadanoA->guardarDatos($con,$datosObj);
           print '<a href=\'manejadorCiudadano.php?accion=con\'>Ver datos</a>';
       }else{
           print 'No se ha enviado datos ';
       }
        break;
    case 'con':        
        $sql = 'SELECT * FROM ciudadano';
        $datoss =  consultaD($con, $sql);

        print imprimetabla($datoss,"ciudadano","table table-bordered table-striped",1);
        break;
        default:
        print 'No hay Accion que realizar';
        break;
      }
 ?>  
     </body>
</html>





    
