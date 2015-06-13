
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
include './clases/Partido.php';
include './clases/PartidoControlador.php';

$partidoA = new PartidoControlador();

$accion= $_REQUEST['accion'];
switch ($accion) {
    case 'save':
        if(isset($_REQUEST['bot'])){
           $partidoA->setId('NULL');
           $partidoA->setPartido($_REQUEST['part']);
           $partidoA->setDUI($_REQUEST['dui']);
           $partidoA->setNombre($_REQUEST['nombre']);
           $partidoA->setApellido($_REQUEST['apellido']);
          
           
           $datosObj=array($partidoA->getId(),
                           $partidoA->getPartido(),
                           $partidoA->getDUI(),
                           $partidoA->getNombre(),
                           $partidoA->getApellido());
                          
           print $partidoA->guardarDatos($con,$datosObj);
           print '<a href=\'manejadorPartido.php?accion=con\'>Ver datos</a>';
       }else{
           print 'No se ha enviado datos ';
       }
        break;
    case 'con':        
        $sql = 'SELECT * FROM partidos';
        $datoss =  consultaD($con, $sql);

        print imprimetabla($datoss,"partidos","table table-bordered table-striped",1);
        break;
        default:
        print 'No hay Accion que realizar';
        break;
      }
 ?>  
     </body>
</html>







    
