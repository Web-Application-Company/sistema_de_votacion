<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes">
<title>Simulador de votación</title>
<link href="./css/css_002.css" rel="stylesheet" type="text/css">
<link href="./css/css.css" rel="stylesheet" type="text/css">
<link href="./css/estilos.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="./css/login/bootstrap.css">
<style>
		.container-fluid{
			width: 500px;
		}
		
	</style>


</head>
<body class="inicio">
<header class="portada">
<img src="./img/logo.png"><br>

</header>

<!--formulario de inicio-->
<div class="jumbotron">
	<div class="container-fluid">
		<div class="panel panel-default">
  			<div class="panel-heading">
    			<h3 class="panel-title">Inicie sesión por favor</h3>
  			</div>
  		<div class="panel-body">
    		<form action="sesion.php" method="POST" id="categoria" name="form" class="form-horizontal">
    			<div <div class="form-group">

    				<div class="form-group">
    					<label  class="col-xs-5 control-label">Usuario</label>
    					<div  class="col-xs-5">
    						<input type="text" Placeholder="Digite usuario" name="usuario" class="form-control">
    					</div>
    				</div>
    				<br>
    				<div class="row">
    					<label  class="col-xs-5 control-label">Contraseña</label>
    					<div class="col-xs-5">
    						<input type="password" Placeholder="Digite su contraseña"  name="clave" class="form-control">
    					</div>
    				</div>
    				<br>

                    <?php if (isset($_REQUEST['msg'])) { ?>
                    <div class="row">
                        <div class="col-xs-4"></div>
                        <div class="col-xs-2">
                            <div class='label alert-danger'>
                               <?php  print "Error al inicio de sesion";?> 
                            </div>
                        </div>
                    </div>
                    <br>
                    <?php }  ?>
                    
                    <div class="form-group">
                        <div class="col-xs-offset-3 col-xs-9">
                        <input type="submit" class="btn btn-primary" value="Ingresar" name="enviar" class="required  form-control">
                        <input type="reset" class="btn btn-default" value="Limpiar">
                        </div>
                    </div>

    			</div>
    		</form>
  		</div>
	</div>
</div>
</div>

<script type="text/javascript">
    $().ready(function () {
      $("#categoria").validate({});
    });


    </script>

<!--fin de formulario-->



<footer class="flotar">

<img src="./img/footer.png">
<p></p>
</footer>

<script src="./js/jquery-1.js"></script>
<script id="me" src="./js/departamentos.js"></script>


</body></html>