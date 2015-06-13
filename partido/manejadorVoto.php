
<html>
    <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./css/controdeformulario.css">
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
include './clases/Coneccion.php';
include './clases/Voto.php';
include './clases/VotoControlador.php';

$votoA = new VotoControlador();

$accion= $_REQUEST['accion'];
switch ($accion) {
    case 'save':
        if(isset($_REQUEST['voto'])){
           $votoA->setId('NULL');
           $votoA->setVoto($_REQUEST['voto']);

           $datosObj=array($votoA->getId(),
                           $votoA->getVoto());
           print $votoA->guardarDatos($con,$datosObj);

           print '<a href=\'manejadorVoto.php?accion=con\'>Ver datos</a>';
       }else{
           print 'No se ha enviado datos ';
       }
        break;
    case 'con':        
        $sql = 'SELECT * FROM voto';
        $datoss =  consultaD($con, $sql);

        print imprimetabla($datoss,"voto","table table-bordered table-striped",1);
        break;
        default:
        print 'No hay Accion que realizar';
        break;
      }
 ?>  
     </body>
</html>

