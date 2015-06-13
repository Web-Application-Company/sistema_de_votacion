<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema de votacion</title>
    
    <script src="./libs/jquery-2.1.0.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/controdeformulario.css">
    
    <script src="./libs/validacion/jquery.validate.min.js"></script>
    <script src="./libs/validacion/messages.js"></script>
    <script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
    <link rel="stylesheet" href="./css/index/style.css" type="text/css" media="screen"/>
        <link rel="stylesheet" type="text/css" href="./css/index/estilo2.css">
    </head>
 
     <body class="inicio">
      <header >
        <h1>
            Index General
        </h1>
    </header>

    <div class="jumbotron">
        <div class="content">
			
			<ul id="sdt_menu" class="sdt_menu">
				
				<li>
					<a href="index_admin.php">
						<img src="img/index.png" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">TEE</span>
							<span class="sdt_descr"> ¡Inicia sesión porfavor!</span>
						</span>
					</a>
				</li>
				<li>
					<a href="./formulariovotante.php">
						<img src="./img/votar.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Vota Aqui</span>
							<span class="sdt_descr">¡Inicia tu Votacion Aqui!</span>
						</span>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="./img/resultados.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Resultados</span>
							<span class="sdt_descr">Minuto a minuto</span>
						</span>
					</a>
					<div class="sdt_box">
						<a href="http://127.0.0.1/partido/resul.php">Alcaldes-Resutados</a>
						<a href="http://127.0.0.1/partido/reporte1/reporteAlcaldes.php">Alcaldes-Graficos</a>
						<a href="http://localhost/partido/diputado/resul.php">Diputados-Resultados</a>
						<a href="http://127.0.0.1/partido/reporte1/reporteDiputados.php">Diputados-Graficos</a>
						<a href="http://localhost/partido/presidente/resul.php">Presidenciales-Resultados</a>
						<a href="http://127.0.0.1/partido/reporte1/reportePresidencial.php">Presidenciales-Graficos</a>
					</div>
				</li>
			</ul>
		</div>
    </div>
    <!-- The JavaScript -->
        <script type="text/javascript" src="./js/index/jquery.min.js"></script>
		<script type="text/javascript" src="./js/index/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="./js/index/animate.js"></script>
      
    </body>
</html>
