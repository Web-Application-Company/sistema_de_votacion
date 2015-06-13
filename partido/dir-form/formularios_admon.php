<!DOCTYPE html>

<?php session_start(); ?>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes">
<title>Sistema de Votación</title>
<link href="../css/css_002.css" rel="stylesheet" type="text/css">
<link href="../css/css.css" rel="stylesheet" type="text/css">
<link href="../css/estilos.css" rel="stylesheet" type="text/css">
<link href="../libs/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="../libs/bootstrap/css/jumbotron-narrow.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/estilo-h.css">


</head>
<body class="inicio">
<!--menu-->
<div id="menuh">
    <ul>
      <li><a href="formularios_admon.php" >Inicio</a></li>
      <li><a href="../cerrar.php">cerrar</a></li>
      <li><a href="../index.php">Inicio General</a></li>
    
    </ul>
  </div>
<!--fin menu-->
<header class="portada">
<img src="../img/logo.png"><br>
<h1>Panel de control TEE</h1>
</header>

<!--formularios de Admón-->
    
<div class="container">

      <div class="row marketing">
        <div class="col-lg-6">
          <h4><a href="../Reg_User.php">Registro de Usuarios</a></h4>
          <p>Registro de usuarios de personal TSE que 
          Tendrán Acceso al sistema de votación.</p>

          <h4><a href="../formularioCiudadano.php">Registro de Votantes</a></h4>
          <p>Registro de usuarios Votantes por parte del TEE</p>

          <h4> <a href="../formularioAsignar.php">Asignarnar</a></h4>
          <p></p>
        </div>

        <div class="col-lg-6">
          <h4><a href="../Reg_candidato.php">Registro de Candidatos</a></h4>
          <p>Registre candidatos para las 
          elecciones que se presenten </p>

          <h4><a href="../formularioPartido.php">Registro de Partidos Políticos</a></h4>
          <p>Registre los partidos políticos en contienda.<p>

          <h4> <a href="../formularioCoalicion.php">Coalicion</a></h4>
          <p></p>
        </div>
      </div>

      

    </div>




<!--fin de formulario-->



<footer class="flotar">
<img src="../img/footer.png">
<p></p>
</footer>
<script src="../js/jquery-1.js"></script>
<script id="me" src="../js/departamentos.js"></script>


</body></html>