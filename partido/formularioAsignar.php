<?php include './clases/Coneccion.php';?>


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
    <script src="./js/mover.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/estilo-h.css">
    </head>
   
    <body background="./img/2.jpg">
    <!--menu-->
<div id="menuh">
    <ul>
      <li><a href="dir-form/formularios_admon.php" >Inicio</a></li>
      <li><a href="cerrar.php">Salir</a></li>

    </ul>
  </div>
<!--fin menu-->
    <header >
        <h1>
            Formulario de Inscripcion De Asignar Coalicion
        </h1>
      
        </header><br>
    <div class="jumbotron">
        <form action="manejadorAsignar.php?accion=save" method="post" id="detalle_coalicion">
             <table class="table-bordered">

    <div class="row">
                <div class="nom">
                    Nombre de partido:
                </div>
                <div class="nomt">
                    <select name="id_part"  multiple="multiple" size="10">
                        <option value=""></option>
                          <?php 
                
                            $sql = "SELECT id,partido FROM partidos;";
                            $datos = consultaD($con, $sql);
                            foreach ($datos as $value) {
                                print "<option value='";
                                print $value['id'];
                                print "'>";
                                print $value['partido'];
                                print "</option>";
                            }                
                        ?>

                    </select>
                    
                </div>
               
             <div class="nom">
                    Nombre de coalicion:
                </div>
                <div class="nomt">
                   <select name="id_coali"  multiple="multiple" size="10">
                        <option value=""></option>
                          <?php 
                
                            $sql = "SELECT id,nombre FROM coalicion;";
                            $datos = consultaD($con, $sql);
                            foreach ($datos as $value) {
                                print "<option value='";
                                print $value['id'];
                                print "'>";
                                print $value['nombre'];
                                print "</option>";
                            }                
                        ?>

                    </select>
                   
                </div>
                </div>
               
          
            <div class="row">
                <td colspan="2">
                    <input type="submit" name='bot' value='Enviar' class="btn btn-primary">
                </div>
            </div>
        </table>
        </form>
    </div>
        
    </body>
</html>
