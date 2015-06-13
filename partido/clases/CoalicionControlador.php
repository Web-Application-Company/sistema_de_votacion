<?php
class CoalicionControlador extends Coalicion{
   
    public function guardarDatos($con,$objcoalicion) {
        $variableSql = "INSERT INTO coalicion ";
        $variableSql .= "(id,nombre,";
        $variableSql .= "localidad) ";
        $variableSql .= "VALUES (";
        $variableSql.="'".$objcoalicion[0]."',";
        $variableSql.="'".$objcoalicion[1]."',";
        $variableSql.="'".$objcoalicion[2]."');"; 
        print($variableSql);       
        return consultaA($con, $variableSql);
        
        }

        public function modificarDatos($con,$objcoalicion) {
        $variableSql = "UPDATE coalicion SET  ";
        $variableSql .= "nombre = '".$objcoalicion[1]."'";
        $variableSql .= "    ,localidad = '".$objcoalicion[2]."'";

        $variableSql .= " WHERE id = ".$objcoalicion[0].";";                
        return consultaA($con, $variableSql);
        
        }
}
