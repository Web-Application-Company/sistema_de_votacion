<?php
class UsuarioControlador extends Usuario{
   
    public function guardarDatos($con,$objUsuar) {
        $variableSql = "INSERT INTO usuario ";
        $variableSql .= "(id,nombre,user,clave,";
        $variableSql .= "rango) ";
        $variableSql .= "VALUES (";
        $variableSql.="'".$objUsuar[0]."',";
        $variableSql.="'".$objUsuar[1]."',";
        $variableSql.="'".$objUsuar[2]."',";
        $variableSql.="'".$objUsuar[3]."',";
        $variableSql.="'".$objUsuar[4]."');";        
        return consultaA($con, $variableSql);
        
        }

        public function modificarDatos($con,$objUsuar) {
        $variableSql = "UPDATE usuario SET  ";
        $variableSql .= "nombre = '".$objUsuar[1]."'";
        $variableSql .= "  ,user = '".$objUsuar[2]."'";
        $variableSql .= " ,clave = '".$objUsuar[3]."'";
        $variableSql .= " ,rango = '".$objUsuar[4]."'";
        $variableSql .= " WHERE id = ".$objUsuar[0].";";                
        return consultaA($con, $variableSql);
        
        }
}
