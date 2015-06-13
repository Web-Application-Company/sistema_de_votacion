<?php
class AsignarControlador extends Asignar{
   
    public function guardarDatos($con,$objcoalicion) {
        $variableSql = "INSERT INTO detalle_coalicion ";
        $variableSql .= "(id,partido,";
        $variableSql .= "coalicion) ";
        $variableSql .= "VALUES (";
        $variableSql.="'".$objcoalicion[0]."',";
        $variableSql.="'".$objcoalicion[1]."',";
        $variableSql.="'".$objcoalicion[2]."');"; 
        print($variableSql);       
        return consultaA($con, $variableSql);
        
        }

        public function modificarDatos($con,$objcoalicion) {
        $variableSql = "UPDATE detalle_coalicion SET  ";
        $variableSql .= "partido = '".$objcoalicion[1]."'";
        $variableSql .= "    ,coalicion = '".$objcoalicion[2]."'";
        $variableSql .= " WHERE id = ".$objcoalicion[0].";";                
        return consultaA($con, $variableSql);
        
        }
}