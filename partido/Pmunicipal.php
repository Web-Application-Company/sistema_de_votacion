<html> 
 <head>

<style type="text/css">
 label {
background-image: url(xxx.gif);
background-repeat: no-repeat;
height: ##px; /* el alto de la imagen */
width: ##px; /* el ancho de la imagen */
display: block;
text-indent: -10000px;
float: left;
}
</style>
  <SCRIPT LANGUAGE="JavaScript"> 
  <!--  
   image1 = new Image(); 
   image1.src = "./img/B.jpg"; 
   image2 = new Image(); 
   image2.src = "./img/B1.jpg";
   image3 = new Image(); 
   image3.src = "./img/B2.jpg"; 
   


   function cambiar(id) { 
    if ( document.getElementById('checkbox_'+id).src != image1.src ) { 
     document.getElementById('checkbox_'+id).src = image2.src; 
     document.getElementById('checkbox_'+id).src = image3.src; 
      

    } else { 
     document.getElementById('checkbox_'+id).src = image2.src; 
    } 
   } 


  --> 
  </SCRIPT> 
 </head> 
 <body> 

  <a href="JavaScript:cambiar('1')"><img id="checkbox_1" name="checkbox_1" src="./img/B.jpg" width="200" height="200" border="0"  ></a>  

  <a href="JavaScript:cambiar('2')"><img id="checkbox_2" name="checkbox_2" src="/img/A.jpg" width="40" height="35" border="0"></a> 
 


 <label for="idchk"> <img src="./img/C.jpg">
<input type="checkbox" id="idchk" name="chk"> </label>


<label for="idchk" style="font-size: 20px; background -image:url(xxx.gif)"> &nbsp;&nbsp;&nbsp;&nbsp; </label> 




<label for="idchk">Le gusta?</label> <input type="checkbox" id="idchk" name="chk" />

<style type="text/css">

 input[type="checkbox"]{
        background-color: red;
        border: 2px solid blue;
        color: yellow;
    }
    </style>

 </body> 

</html>  


