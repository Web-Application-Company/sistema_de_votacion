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
include './clases/ConeccionDui.php';
include './clases/Candidato.php';
include './clases/CandidatoControlador.php';

$alumnoA = new CandidatoControlador();


if(isset($_REQUEST['bot'])){
           $alumnoA->setDui($_REQUEST['dui']);
           $alumnoA->setApellido($_REQUEST['apellido']);
           $alumnoA->setNombre($_REQUEST['nombre']);
           $alumnoA->setDepto($_REQUEST['depto']);
           $alumnoA->setMunicipio($_REQUEST['muni']);
           $alumnoA->setTipo($_REQUEST['tipo']);
           $alumnoA->setCandidato_a($_REQUEST['candidato_a']);

             $datosObj=array($alumnoA->getDui(),
                           $alumnoA->getApellido(),
                           $alumnoA->getNombre(),
                           $alumnoA->getDepto(),
                           $alumnoA->getMunicipio(),
                           $alumnoA->getTipo(),
                          $alumnoA->getCandidato_a(),);

            print "<div id='dialogo' title='Exito' style='display: none;'>";
            print '<p>Mensaje: ';
            print $alumnoA->modificarDatos($con,$datosObj);
            print '<span class="badge glyphicon glyphicon-ok"></span></p>';
            print '<a href=\'manejadorCandidato.php?accion=con\'>Ver datos</a>';
            print "</div>";
            

        }
 ?><script>
$(document).ready(function(){
   $("#dialogo").dialog();
});
</script>
      </body>
</html>

