<?php include './clases/Coneccion.php';?>

<pre>
<?php  
$sql ="SELECT * FROM coalicion WHERE id ='".$_REQUEST['id']."';";
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
    </head>
    <body>
    <div class="jumbotron">
        <form action="modificarCoalicion.php" method="post" id="coalicion">
             <table class="table-bordered">
            <div class="row">
                <div class="col-xs-2">
                    Nombre:
                </div>
                <div class="col-xs-2">
                    <input type="hidden" name="id" value='<?php print $datos[0][0]?>'>
                    <input type="text" name="nombre" value='<?php print $datos[0][1]?>'
                    class="required form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-2">
                    Localidad:
                </div>
                <div class="col-xs-2">
                    <input type="text" name="local" value='<?php print $datos[0][2]?>'
                    class="required form-control">
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
