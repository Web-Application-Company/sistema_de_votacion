<?php include './clases/Coneccion.php';?>

<html>

    <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
    <script src="./libs/jquery-2.1.0.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/controdeformulario.css">
    <link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
    <script src="./libs/validacion/jquery.validate.min.js"></script>
    <script src="./libs/validacion/messages.js"></script>
    <script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
    <script src="./libs/validacion/validacion_text_y_num.js"></script>
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
            Formulario de Inscripcion De Usuario
        </h1>
    </header><br>


    <div class="jumbotron">
        <form action="manejadorUsuario.php?accion=save" method="post" id="usuario">
             <table class="table-bordered">
            
            <div class="row">
          
                <div class="nom">
                    Nombre:
                </div>
                <div class="nomt">
                    <input type="text" name="nombre" placeholder="Nombre y Apellido" class="required form-control" minlength="2" required="true" onkeydown="return validarLetras(event)">
                </div>

            
            
                <div class="nom">
                    Usuario:
                </div>
                <div class="nomt">
                    <input type="text" name="user" class="required form-control" placeholder="Digite su usuario" minlength="2" required="true" onkeydown="return validarLetras(event)">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="nom">
                    Clave:
                </div>
                <div class="nomt">
                    <input type="password" name="clave" class="required form-control" required="" placeholder="Contraseña">
                </div>
           
                <div class="nom">
                    Rango:
                </div>
                <div class="nomt">
                   
                     <select name="rango" class="required form-control"  required="">
                        <option value="">-----</option>
                        <option value="Admo">Administrador</option>
                        <option value="User">Usuario</option>
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
