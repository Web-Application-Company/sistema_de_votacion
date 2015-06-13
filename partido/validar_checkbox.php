<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$conn=mysql_connect("localhost","root","");
mysql_select_db("partido",$conn);

$anio=$_POST['anio'];




if($_POST['checkbox'] != "")
{
		 if(is_array($_POST['checkbox']))
         {
       		 // realizamos el ciclo
       		 while(list($key,$value) = each($_POST['checkbox'])) 
        	{
				$sql=mysql_query("INSERT INTO apertura (anio, tipo) VALUES ('$anio','$value')");
       	 	}
   		 }
}

if( $sql)
echo '<h1>El proceso de guardado se realizó correctamente</h1><br><a href="checkbox.php">ir atrás</a>';
else
echo '<h1>El proceso de guardado no se realizó correctamente</h1><br><a href="checkbox.php">ir atrás</a>';
		
?>