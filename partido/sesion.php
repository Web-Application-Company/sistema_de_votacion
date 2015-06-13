<?php session_start(); ?>
<?php 
	include './clases/Coneccion.php';

	if(isset($_REQUEST['enviar'])){
		$sql = "SELECT * FROM usuario WHERE user='";
		$sql .= $_REQUEST['usuario'];
		$sql .= "' AND clave ='";
		$sql .= ($_REQUEST['clave']);
		$sql .= "';";
		

		$datos=consultaD($con,$sql);
		$numero = count($datos);

		if($numero !=0){
			$_SESSION['usuario'] = $datos[0]['user'];
			$_SESSION['tipo'] = $datos[0]['rango'];
			$_SESSION['id_session'] = session_id();
			header("Location:dir-form/formularios_admon.php");
				
		

		}else{
			header("Location:index_admin.php?msg=1");

		}

	}
 ?>