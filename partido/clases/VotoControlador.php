<?php
class VotoControlador extends Voto{
   
    public function guardarDatos($con,$objvoto) {
        $variableSql = "INSERT INTO voto ";
        $variableSql .= "(id,voto) ";
        $variableSql .= "VALUES (";
        $variableSql.="'".$objvoto[0]."',";
        $variableSql.="'".$objvoto[1]."');"; 
        print($variableSql);       
        return consultaA($con, $variableSql);
        
        }

        
}