
<?php include './clases/Coneccion.php';?>

<?php
session_start();

if(isset($_SESSION['barra'])) {?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="./css/estiloM.css">
<script src="js/jquery.min.js"></script>


<title></title>
</head>
<body background="./img/2.jpg">
    <header> 
        <h1> PAPELETA MUNICIPAL</h1><HR WIDTH="80%">
    </header>  <br>

     
   

    <div class="principal"  >
    <div id="ok" style="display: none;"><img src="./img/votar.png" class="dedo" />
    <a href="./diputado/papeleta_diputado.php"></div>

      <form name="var1">      
   <div id="image1" name="var1" class="contadorClicks" ><img src="./img/A.jpg" width="250" height="200" />
   </div>
   <div id="image2" name="var1"class="contadorClicks"><img src="./img/B.jpg" width="250" height="200" />
   </div>
   <div id="image3" name="var1"class="contadorClicks"><img src="./img/C.jpg" width="250" height="200" />
   </div>
   <div id="image4" name="var1" class="contadorClicks"><img src="./img/D.jpg" width="250" height="200" />
   </div>
   <div id="image5" name="var1" class="contadorClicks"><img src="./img/E.jpg" width="250" height="200" />
   </div>
    <div id="image6" name="var1" class="contadorClicks"><img src="./img/F.jpg" width="250" height="200" />
   </div>
        </form>        
    </div><BR>


    <footer>
        


    </footer>
    
     


    
</body>
<script src="js/script.js" type="text/javascript"></script>
</html>

<?php }else{
    header("Location:index_admin.php");
 } ?>