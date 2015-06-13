<?php include './clases/Coneccion.php';?>

<pre>
<?php  
$sql ="SELECT * FROM usuario WHERE id ='".$_REQUEST['id']."';";
        $datos= consultaD($con, $sql,3)
       ?>
      
       </pre>
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
    <link rel="stylesheet" type="text/css" href="./css/controdeformulario.css">
    </head>
    <body background="./img/2.jpg">
     <header >
        <h1>
            Modificar Datos De Usuario
        </h1>
    </header><br>
    <div class="jumbotron">
        <form action="modificarUsuario.php" method="post" id="alumno">
             <table class="table-bordered">
            <div class="row">
                <div class="nom">
                    Nombre:
                </div>
                <div class="nomt">
                    <input type="hidden" name="id" 
                    value='<?php print $datos[0][0]?>' placeholder="Nombre y Apellido" class="required form-control" minlength="2" required="true" onkeydown="return validarLetras(event)">

                    <input type="text" name="nombre" 
                    value='<?php print $datos[0][1]?>'
                    class="required digits form-control">

                </div>
         
                <div class="nom">
                    Usuario:
                </div>
                <div class="nomt">
                    <input type="text" name="user" 
                    value='<?php print $datos[0][2]?>'
                    class="required form-control">
                </div>
            </div>
            <br>   
            <div class="row">
                <div class="nom">
                    Clave:
                </div>
                <div class="nomt">
                    <input type="password" name="clave" value='<?php print $datos[0][3]?>'
                    class="required form-control">
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
