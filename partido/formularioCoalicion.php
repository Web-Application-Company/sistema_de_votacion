<?php include './clases/Coneccion.php';?>


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
    <script src="./libs/validacion/validacion_text_y_num.js"></script>
    <script src="./js/mover.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/controdeformulario.css">
    <link rel="stylesheet" type="text/css" href="./css/estilo-h.css">
    </head>
    <body background="./img/2.jpg">
    <!--menu-->
<div id="menuh">
    <ul>
      <li><a href="dir-form/formularios_admon.php" >Inicio</a></li>
      <li><a href="cerrar.php">cerrar</a></li>
    </ul>
  </div>
<!--fin menu-->
    <header >
        <h1>
            Formulario de Inscripcion De Coalicion
        </h1>
      
        </header><br>
          <div class="regreso">
        <a href="./dir-form/formularios_admon.php" class="btn-link">Panel</a>
        <a href="cerrar.php" class="btn-link">Cerrar Sesion</a>
    </div>

    

    <div class="jumbotron">
        <form action="manejadorCoalicion.php?accion=save" method="post" id="coalicion">
             <table class="table-bordered">
                <div class="row">
                <div class="nom">
                    Nombre:
                </div>
                <div class="nomt">
                    <input type="text" name="nombre" placeholder="Nombre " required="true"class="required form-control" minlength="2" required="true" onkeydown="return validarLetras(event)">
                    
                </div>
              
             <div class="nom">
                    Localidad:
                </div>
                <div class="nomt">
               
                    <select   name='local'   class="required form-control">
                        <option value="nacional">Nacional</option>
                        <option value="depart">Deprtamental</option>
                        <option value="municipal">Municipal</option>
                    
                    </select>
                   
                </div>
                </div>
               

</div>
            <br>
        
          <a href="formularioAsignar.php">Formulario Asignar</a>
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
