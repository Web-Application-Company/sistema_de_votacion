<?php include './clases/Coneccion.php';?>
<pre>

<?php  
$sql ="SELECT * FROM detalle_coalicion WHERE id ='".$_REQUEST['id']."';";
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
    <body  background="./img/2.jpg">

     <header >
        <h1>
            Modificar Datos De Asignar Coalicion
        </h1>
      
        </header><br>
    <div class="jumbotron">
        <form action="modificarAsignar.php" method="post" id="detalle_coalicion">
             <table class="table-bordered">
          <div class="nom">
                    Nombre de partido:
                </div>
                <div class="col-xs-2">
                <input type="hidden" name="id" value='<?php print $datos[0][0]?>'>
                    <select name="id_part"  multiple="multiple" size="10" value='<?php print $datos[0][1]?>'>
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
                <div class="col-xs-2">
                   <select name="id_coali"  multiple="multiple" size="10" value='<?php print $datos[0][2]?>'>
                        <option value=""></option>
                          <?php 
                
                            $sql = "SELECT nombre FROM coalicion;";
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

