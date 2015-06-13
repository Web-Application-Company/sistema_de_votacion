<?php

class PartidoControlador extends partido{
    
   
    public function guardarDatos($con,$objPartido) {
        $variableSql = "INSERT INTO partidos ";
        $variableSql .= "(id,partido,dui,nombre,apellido) ";
        $variableSql .= "VALUES (";
        $variableSql.="'".$objPartido[0]."',";
        $variableSql.="'".$objPartido[1]."',";
        $variableSql.="'".$objPartido[2]."',";
        $variableSql.="'".$objPartido[3]."',";
        
        $variableSql.="'".$objPartido[4]."');";
      return consultaA($con, $variableSql);
    }

    public function modificarDatos($con,$objPartido) {
        $variableSql = "UPDATE partidos SET  ";
        $variableSql .= " partido = '".$objPartido[1]."'";
        $variableSql .= ", dui = '".$objPartido[2]."'";
        $variableSql .= ",  nombre = '".$objPartido[3]."'";
        $variableSql .= ",  apellido = '".$objPartido[4]."'";
    
        $variableSql .= " WHERE id = ".$objPartido[0].";";                
        return consultaA($con, $variableSql);
        
        }
    
    
   
}


