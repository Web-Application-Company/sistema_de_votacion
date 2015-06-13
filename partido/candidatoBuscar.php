
<?php include './clases/ConeccionDui.php';?>
<pre>
<?php  
$sql ="SELECT * FROM candidato WHERE id ='".$_REQUEST['id']."';";
        $datos= consultaD($con, $sql,3)
       ?>
       <?php
$conexion = new mysqli('localhost', 'root', '', 'partido');
?>
</pre>
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
    </head>1

    <body background="./img/2.jpg">

         <header >
        <h1>
            Modificar Datos De Candidato
        </h1>
    </header><br>
    <div class="jumbotron">
      <form action="modificarCandidato.php" method="post" id="candidato">
             <table class="table-bordered">
            
            <div class="row">
          
                <div class="dui">
                    DUI:
                </div>
                <div class="duit">
            
                    <input type="text" name="dui" maxlength="10"  class="required form-control" value='<?php print $datos[0][0]?>' >
                </div>
            </div>
            <br>

            <div class="row">
            
                <div class="nom">
                    Apellido:
                </div>
                <div class="nomt">
                    <input type="text" name="apellido" class="required form-control" value='<?php print $datos[0][1]?>'>
                </div>
          
                <div class="nom">
                   Nombre:
                </div>
                <div class="nomt">
                    <input type="text" name="nombre" class="required form-control" value='<?php print $datos[0][2]?>'>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="nomt">
                  PARTICIPACION
                </div>
                <br>
                <br>
                 <div class="row">
                       
                <div class="nom">
                Partido:
                    
                </div>
    
                <div class="duit">
                   <Select name="candidato" class="required form-control" value='<?php print $datos[0][3]?>'>
                        <option value="">Elija una oncion</option>
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
                Coalicion:
                    
                </div>
    
                <div class="duit">
                   <Select name="candidato" class="required form-control" value='<?php print $datos[0][3]?>'>
                        <option value="">Elija una oncion</option>
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
               </div></div>
               <br>
               <br>

    
           



            <div class="row">
                <div class="nom">
                    Departamento:
                </div>
                <div class="nomt">
                    <select id="depto" name="depto" class="form-control" value='<?php print $datos[0][4]?>'>
                      <option >-------------</option>
                      <?php
                    $result = $conexion->query("SELECT * FROM departamentos");
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<option value="'.$row['codigo'].'">'.utf8_encode($row['nombre']).'</option>';
                        }
                    }
                    ?>

                    </select>
                </div>
         
                <div class="nom">
                    Municipio:
                </div>
                <div class="nomt">
                     <select name="muni" id="municipio" class="required form-control" required="true" onkeydown="return validarLetras(event)" value='<?php print $datos[0][5]?>'>
                      <option value="">--------------</option>
                    </select>
                </div>
            </div>
            <script language="javascript" >
                $(document).ready(function(){
                    $("#depto").change(function () {
                        $("#depto option:selected").each(function () {
                            id_depto = $(this).val();
                            $.post("municipio.php", { id_depto: id_depto }, function(data){
                                $("#municipio").html(data);
                            });
                        });
                    })
                });
            </script>
            <br>
            <div class="row">
                <div class="dui">
                    Cargo:
                </div>
                <div class="duit">
                    <select id="cargo" name="tipo" class="form-control" value='<?php print $datos[0][6]?>'>
                    <option value="">------------</option>
                     <?php 
                
                            $sql = "SELECT id,tipo FROM apertura;";
                            $datos = consultaD($con, $sql);
                            foreach ($datos as $value) {
                                print "<option value='";
                                print $value['id'];
                                print "'>";
                                print $value['tipo'];
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

