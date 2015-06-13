<?php
class CiudadanoControlador extends Ciudadano{
   
    public function guardarDatos($con,$objCiudadano) {
        $variableSql = "INSERT INTO ciudadano ";
        $variableSql .= "(id,dui,nombre,apellido,fecha,genero,direccion,depto,municipio) ";
        $variableSql .= "VALUES (";
        $variableSql.="'".$objCiudadano[0]."',";
        $variableSql.="'".$objCiudadano[1]."',";
        $variableSql.="'".$objCiudadano[2]."',";
        $variableSql.="'".$objCiudadano[3]."',";
        $variableSql.="'".$objCiudadano[4]."',";
        $variableSql.="'".$objCiudadano[5]."',";
        $variableSql.="'".$objCiudadano[6]."',";
        $variableSql.="'".$objCiudadano[7]."',";
        $variableSql.="'".$objCiudadano[8]."');";        
        return consultaA($con, $variableSql);
        
        }

        public function modificarDatos($con,$objCiudadano) {
        $variableSql = "UPDATE ciudadano SET  ";
        $variableSql .= "dui = '".$objCiudadano[1]."'";
        $variableSql .= "  ,nombre = '".$objCiudadano[2]."'";
        $variableSql .= " ,apellido = '".$objCiudadano[3]."'";
        $variableSql .= " ,fecha = '".$objCiudadano[4]."'";
        $variableSql .= " ,genero = '".$objCiudadano[5]."'";
  
        $variableSql .= " ,direccion = '".$objCiudadano[6]."'";
        $variableSql .= " ,depto = '".$objCiudadano[7]."'";
        $variableSql .= " ,municipio = '".$objCiudadano[8]."'";
        $variableSql .= " WHERE id = ".$objCiudadano[0].";";                
        return consultaA($con, $variableSql);
        
        }
}
