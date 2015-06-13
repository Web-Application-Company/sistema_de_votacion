<?php
class CandidatoControlador extends Candidato{
   
    public function guardarDatos($con,$objCandi) {
        $variableSql = "INSERT INTO candidato ";
        $variableSql .= "(dui,apellido,nombre,cod_depto,";
        $variableSql .= "cod_muni,id_tipo,candidato_a) ";
        $variableSql .= "VALUES (";
        $variableSql.="'".$objCandi[0]."',";
        $variableSql.="'".$objCandi[1]."',";
        $variableSql.="'".$objCandi[2]."',";
        $variableSql.="'".$objCandi[3]."',";
        $variableSql.="'".$objCandi[4]."',";
        $variableSql.="'".$objCandi[5]."',";
        $variableSql.="'".$objCandi[6]."');"; 
        print($variableSql);       
        return consultaA($con, $variableSql);
        
        }

        public function modificarDatos($con,$objCandi) {
        $variableSql = "UPDATE candidato SET  ";
       
        $variableSql .= "  ,apellido = '".$objCandi[1]."'";
        $variableSql .= " ,nombre = '".$objCandi[2]."'";
        
        $variableSql .= " ,cod_depto = '".$objCandi[3]."'";
        $variableSql .= " ,cod_muni = '".$objCandi[4]."'";
        $variableSql .= " ,id_tipo= '".$objCandi[5]."'";
        $variableSql .= " ,candidato_a = '".$objCandi[6]."'";
        $variableSql .= " WHERE dui = ".$objCandi[0].";";                
        return consultaA($con, $variableSql);
        
        }
}
