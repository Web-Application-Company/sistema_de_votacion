<?php include './clases/Coneccion.php';
$conexion = new mysqli('localhost', 'root', '', 'partido');
?>


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
    <script src="./libs/validacion/validacion_text_y_num.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/estilo-h.css">
    <script type="text/javascript">
            
function justNumbers(e)
{
var keynum = window.event ? window.event.keyCode : e.which;
if ((keynum == 8) || (keynum == 46))
return true;
 
return /\d/.test(String.fromCharCode(keynum));
document.tree.miSelect.options[indice].text
}
var patron = new Array(2,2,4)
var patron2 = new Array(1,3,3,3,3)
var patron3 = new Array(8,1)
function mascara(d,sep,pat,nums){
if(d.valant != d.value){
  val = d.value
  largo = val.length
  val = val.split(sep)
  val2 = ''
  for(r=0;r<val.length;r++){
    val2 += val[r]  
  }
  if(nums){
    for(z=0;z<val2.length;z++){
      if(isNaN(val2.charAt(z))){
        letra = new RegExp(val2.charAt(z),"g")
        val2 = val2.replace(letra,"")
      }
    }
  }
  val = ''
  val3 = new Array()
  for(s=0; s<pat.length; s++){
    val3[s] = val2.substring(0,pat[s])
    val2 = val2.substr(pat[s])
  }
  for(q=0;q<val3.length; q++){
    if(q ==0){
      val = val3[q]
    }
    else{
      if(val3[q] != ""){
        val += sep + val3[q]
        }
    }
  }
  d.value = val
  d.valant = val
  }
}

        </script>

<script>
    texto="";

     var Tletras=new Array ("0","1","2","3","4","5","6","7","8","9","-");
     var z=0;
     var Numero=true
     var Guion=new Array("-");

     function anadir(letra){
  texto=document.f.barra.value;
  if(letra=="\b"){
  numeroLetras=texto.length-1
  texto=texto.substring(0,numeroLetras);
  }
  else{
  if(!Numero){letra=letra.toLowerCase()}
  texto=texto+letra;
  }
  document.f.barra.value=texto;
  }
  function mostrar(){
  if (z==0){z=1;document.getElementById('botones').style.visibility="visible";pregunta.innerHTML="Ocultar teclado";}
  else {z=0;document.getElementById('botones').style.visibility="hidden";pregunta.innerHTML="Mostrar teclado";}
  }
</script>
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
            Formulario de Inscripcion Del Ciudadano
        </h1>
    </header><br>


    <div class="jumbotron">
        <form action="manejadorCiudadano.php?accion=save" method="post" id="ciudadano">
             <table class="table-bordered">

            <div class="row">
               
                <div class="dui">
                    Dui:
                </div>
                <div class="duit">
                    <input type="text" name="dui" maxlength="10" placeholder="00000000-0" class="required  form-control" onkeyup="mascara(this,'-',patron3,true)">
                </div>
            </div><br>
            <div class="row">
          
                <div class="nom">
                    Nombre:
                </div>
                <div class="nomt">
                    <input type="text" name="nombre" required="true" placeholder="Nombre" class="required form-control" minlength="2" required="true" onkeydown="return validarLetras(event)">
                </div>
         
            
                <div class="apell">
                    Apellido:
                </div>
                 <div class="apellt">
                    <input type="text" name="apellido" required="true" placeholder="Apellido" class="required form-control" minlength="2" required="true" onkeydown="return validarLetras(event)">
                </div>
            </div>
            <br>
            <div class="row">
                 <div class="calen">
                    Fecha de Vencimiento:
                </div>
                <div class="duit">
                    <div class="input-group">                    
                    <input type="text" name="fecha" id="fechac" class="required form-control">
                    <span id="fechac" class=" input-group-addon glyphicon glyphicon-calendar"></span>
                </div>
                </div>
            
            
                <div class="nom">
                    Genero:
                </div>
                
                <div class="duit">
                    <select name='genero' class="required form-control" required="true">
                        <option value=""></option>
                        <option value="f">Femenino</option>
                        <option value="m">Masculino</option>
                     
                    </select>
                </div></div>
            
                 <br>
             <div class="row">
                <div class="nom">
                    Direccion:
                </div>
                <div class="dire">
                    <input type="text" name="dir" required="true" class="required form-control">
                </div>
            </div><br>

             <div class="row">
                <div class="depa">
                    Departamento:
                </div>

                <div class="depat">
                        <select name="depto" id="depto" class="required form-control" required="true" >    
                        <option value="">----</option>
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
             
                 <div class="muni">
                    Municipio:
                </div>
               <div class="depat">
                    <select name="muni" id="municipio" class="required form-control" required="true" onkeydown="return validarLetras(event)">    
                        <option value="">----</option>
                      
                    </select>
                </div>
            </div></div><br>

            <script language="javascript">
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

            <div class="row">
                <td colspan="2">
                    <input type="submit" name='bot' value='Enviar' class="btn btn-primary">
                </div>
            </div>
        </table>
        </form>
    </div>
        
       <script type="text/javascript">
        $().ready(function () {
            $("#ciudadano").validate({});
        });
        $(document).ready(
            function(){
                $("#fechac").datepicker(    
                    {
                        changeMonth: true,
                        changeYear: true,
                        dateFormat: 'yy-mm-dd',
                        showAnim:'slide'
                    }
                    
                 );
            }
           
       )
    </script>
    </body>
</html>
