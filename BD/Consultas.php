<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//require_once 'conexion/conexion.php';

/**
 * Description of Consultas
 *
 * @author law
 */
class Consultas {
    //put your code here
    var $conexion;
    
    function __construct() {
        $this->conexion = new mysqli("localhost", "root", "", "laboratoriojuanpablo2");
    }

    public function traerExamenesMes($fecha){
    	$ret = 0;

    	$c_sql = "SELECT * FROM `examen_clinico_realizacion` WHERE fecha_creacion LIKE '%$fecha%'";
        
        $resultado = mysqli_query( $this->conexion, $c_sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        
        $ret = mysqli_num_rows($resultado);

        return $ret;
    }




    public function traerExamenesEspecificoMes($fecha, $id_examen){
    	$ret = 0;

    	$c_sql = "SELECT * FROM `examen_clinico_realizacion` WHERE id_examen = $id_examen AND fecha_creacion LIKE '%$fecha%'";
        
        $resultado = mysqli_query( $this->conexion, $c_sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        
        $ret = mysqli_num_rows($resultado);

        return $ret;
    }





    public function traerExamenesEspecificoMesTrabajador($fecha, $id_trabajador){
    	$ret = 0;

    	$c_sql = "SELECT * FROM `examen_clinico_realizacion` WHERE id_trabajador = $id_trabajador AND fecha_creacion LIKE '%$fecha%'";
        
        $resultado = mysqli_query( $this->conexion, $c_sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        
        $ret = mysqli_num_rows($resultado);

        return $ret;
    }


    public function traerExamenesEspecificoMesTrabajador2($fecha, $id_trabajador, $id_examen){
    	$ret = 0;

    	$c_sql = "SELECT * FROM `examen_clinico_realizacion` WHERE id_trabajador = $id_trabajador AND fecha_creacion LIKE '%$fecha%' AND id_examen = $id_examen";
        
        $resultado = mysqli_query( $this->conexion, $c_sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        
        $ret = mysqli_num_rows($resultado);

        return $ret;
    }





    public function nuevosPacientes($fecha){
    	$ret = 0;

    	$c_sql = "SELECT * FROM `paciente` WHERE fecha_registro LIKE '%$fecha%'";
        
        $resultado = mysqli_query( $this->conexion, $c_sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        
        $ret = mysqli_num_rows($resultado);

        return $ret;
    }







    public function totalPacientes(){
    	$ret = 0;

    	$c_sql = "SELECT * FROM `paciente` WHERE estado = 1";
        
        $resultado = mysqli_query( $this->conexion, $c_sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        
        $ret = mysqli_num_rows($resultado);

        return $ret;
    }





    public function nuevosPacientesAnual($fecha){
    	$ret = 0;

    	$c_sql = "SELECT * FROM `paciente` WHERE fecha_registro LIKE '%$fecha%'";
        
        $resultado = mysqli_query( $this->conexion, $c_sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        
        $ret = mysqli_num_rows($resultado);

        return $ret;
    }






    public function menorInsumo(){
    	$ret = 0;

    	$c_sql = "SELECT * FROM `insumo` WHERE cantidad = (SELECT MIN(cantidad) FROM `insumo`)";
        
        $resultado = mysqli_query( $this->conexion, $c_sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        
        $ret = mysqli_fetch_assoc($resultado);

        echo "<div class='huge'>{$ret['cantidad']}</div>";
        echo "<div> {$ret['nombre']} solo quedan {$ret['cantidad']}</div>";


        return $ret;
    }




    public function cantidadExamenesTri($f1, $f2, $f3, $id){
    	$ret = 0;

    	$c_sql = "SELECT * FROM `examen_clinico_realizacion` WHERE id_examen = $id AND (fecha_creacion LIKE '%$f1%' OR fecha_creacion LIKE '%$f2%' OR fecha_creacion LIKE '%$f3%');";
        
        $resultado = mysqli_query( $this->conexion, $c_sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        
        $ret = mysqli_num_rows($resultado);

        return $ret;
    }



    public function cantidadPacientesTriPorCiudad($f1, $f2, $f3, $ciudad){
    	$ret = 0;

    	$c_sql = "";

    	switch ($ciudad) {
    		case 1:
    			$c_sql = "SELECT * FROM `paciente` WHERE ciudad = 'Barranquilla' AND (fecha_registro LIKE '%$f1%' OR fecha_registro LIKE '%$f2%' OR fecha_registro LIKE '%$f3%');";
    			break;
    		case 2:
    			$c_sql = "SELECT * FROM `paciente` WHERE ciudad = 'Bogota' AND (fecha_registro LIKE '%$f1%' OR fecha_registro LIKE '%$f2%' OR fecha_registro LIKE '%$f3%');";
    			break;
    		case 3:
    			$c_sql = "SELECT * FROM `paciente` WHERE ciudad = 'Cartagena' AND (fecha_registro LIKE '%$f1%' OR fecha_registro LIKE '%$f2%' OR fecha_registro LIKE '%$f3%');";
    			break;
    		case 4:
    			$c_sql = "SELECT * FROM `paciente` WHERE ciudad = 'Medellin' AND (fecha_registro LIKE '%$f1%' OR fecha_registro LIKE '%$f2%' OR fecha_registro LIKE '%$f3%');";
    			break;
    		case 5:
    			$c_sql = "SELECT * FROM `paciente` WHERE ciudad = 'Monteria' AND (fecha_registro LIKE '%$f1%' OR fecha_registro LIKE '%$f2%' OR fecha_registro LIKE '%$f3%');";
    			break;
    		case 6:
    			$c_sql = "SELECT * FROM `paciente` WHERE ciudad = 'Sincelejo' AND (fecha_registro LIKE '%$f1%' OR fecha_registro LIKE '%$f2%' OR fecha_registro LIKE '%$f3%');";
    			break;
    		
    		
    		default:
    			# code...
    			break;
    	}

    	
        
        $resultado = mysqli_query( $this->conexion, $c_sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        
        $ret = mysqli_num_rows($resultado);

        return $ret;
    }




    public function cantidadInsumo($id){
    	$ret = 0;

    	$c_sql = "SELECT * FROM `insumo` WHERE id = $id;";
        
        $resultado = mysqli_query( $this->conexion, $c_sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        
        $r = mysqli_fetch_assoc($resultado);

        $ret = $r['cantidad'];

        return $ret;
    }




	public function ultimosExamenes(){
    	$ret = 0;

    	$c_sql = "SELECT * FROM `examen_clinico_realizacion` ORDER BY `fecha_creacion` DESC LIMIT 8";
        
        $resultado = mysqli_query( $this->conexion, $c_sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        
        //$r = mysqli_fetch_assoc($resultado);

        return $resultado;
    }


    public function ultimosPacientes(){
    	$ret = 0;

    	$c_sql = "SELECT * FROM `paciente` ORDER BY `fecha_registro` DESC LIMIT 8";
        
        $resultado = mysqli_query( $this->conexion, $c_sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        
        //$r = mysqli_fetch_assoc($resultado);

        return $resultado;
    }




    public function edadPacienteRango($r_ini){
    	$ret = 0;

    	$c_sql = "SELECT * FROM `paciente` WHERE edad = {$r_ini} OR edad = ".($r_ini + 1). " OR edad = ".($r_ini + 2)." OR edad = ".($r_ini + 3)." OR edad = ".($r_ini + 4)." OR edad = ".($r_ini + 5)." OR edad = ".($r_ini + 6)." OR edad = ".($r_ini + 7)." OR edad = ".($r_ini + 8)." OR edad = ".($r_ini + 9)." ;";
        
        $resultado = mysqli_query( $this->conexion, $c_sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        
        $ret = mysqli_num_rows($resultado);

        return $ret;
    }






    public function darEps($eps){
    	
    	$ret = 0;

    	$c_sql = "SELECT * FROM `paciente` WHERE estado = 1 AND eps = '$eps';";
        
        $resultado = mysqli_query( $this->conexion, $c_sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        
        $ret = mysqli_num_rows($resultado);

        return $ret;
    }




    public function darExamen($id_examen){
    	$c_sql = "SELECT * FROM `examen` WHERE id = $id_examen";
        
        $resultado = mysqli_query( $this->conexion, $c_sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        
        $r = mysqli_fetch_assoc($resultado);

        return $r;	
    }



    public function darNombreExamen($id_examen){
    	$c_sql = "SELECT * FROM `examen` WHERE id = $id_examen";
        
        $resultado = mysqli_query( $this->conexion, $c_sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        
        $r = mysqli_fetch_assoc($resultado);

        return $r["nombre"];	
    }



    public function darPaciente($id_pac){
    	$c_sql = "SELECT * FROM `paciente` WHERE id = $id_pac";
        
        $resultado = mysqli_query( $this->conexion, $c_sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        
        $r = mysqli_fetch_assoc($resultado);

        return $r;	
    }




    public function darPersonal($id_per){
    	$c_sql = "SELECT * FROM `personal` WHERE id = $id_per";
        
        $resultado = mysqli_query( $this->conexion, $c_sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        
        $r = mysqli_fetch_assoc($resultado);

        return $r;	
    }


    public function darNombreTrabajador($id_per){
    	$c_sql = "SELECT * FROM `personal` WHERE id = $id_per";
        
        $resultado = mysqli_query( $this->conexion, $c_sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        
        $r = mysqli_fetch_assoc($resultado);

        return $r["nombre"];
    }



    public function darNombreInsumo($id){
    	$c_sql = "SELECT * FROM `insumo` WHERE id = $id";
        
        $resultado = mysqli_query( $this->conexion, $c_sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        
        $r = mysqli_fetch_assoc($resultado);

        return $r["nombre"];	
    }


    public function darInsumoDiario($id_examen, $fecha){
    	$c_sql = "SELECT * FROM `examen_clinico_realizacion` WHERE id_examen = $id_examen AND fecha_creacion LIKE '%$fecha%'";
        
        $resultado = mysqli_query( $this->conexion, $c_sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        
        $r = mysqli_num_rows($resultado);

        return $r;	
    }




    


    public function proovedores(){
    	$ret = 0;

    	$c_sql = "SELECT * FROM `proovedor` ORDER BY `fecha_creacion` DESC";
        
        $resultado = mysqli_query( $this->conexion, $c_sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        
        //$r = mysqli_fetch_assoc($resultado);

        return $resultado;
    }




    public function pedidos(){
    	$ret = 0;

    	$c_sql = "SELECT * FROM `pedido` ORDER BY `fecha_creacion` DESC";
        
        $resultado = mysqli_query( $this->conexion, $c_sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        
        //$r = mysqli_fetch_assoc($resultado);

        return $resultado;
    }





    public function personal(){
    	$ret = 0;

    	$c_sql = "SELECT * FROM `personal` ORDER BY `fecha_creacion` DESC";
        
        $resultado = mysqli_query( $this->conexion, $c_sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        
        //$r = mysqli_fetch_assoc($resultado);

        return $resultado;
    }






    public function examenes(){
    	$ret = 0;

    	$c_sql = "SELECT * FROM `examen` ORDER BY `fecha_creacion` DESC";
        
        $resultado = mysqli_query( $this->conexion, $c_sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        
        //$r = mysqli_fetch_assoc($resultado);

        return $resultado;
    }




    public function darProovedor($id){
    	$ret = 0;

    	$c_sql = "SELECT * FROM `proovedor` WHERE id = $id";
        
        $resultado = mysqli_query( $this->conexion, $c_sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        
        $r = mysqli_fetch_assoc($resultado);

        return $r;
    }

    public function darDatosCargo($id){
    	$ret = 0;

    	$c_sql = "SELECT * FROM `cargo` WHERE id = $id";
        
        $resultado = mysqli_query( $this->conexion, $c_sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        
        $r = mysqli_fetch_assoc($resultado);

        return $r;
    }




















    public function mayorExamen($fecha){
    	$ret = 0;
    	$entro = false;

    	$c_sql_1 = "SELECT * FROM `examen_clinico_realizacion` WHERE id_examen = 1;";
    	$c_sql_2 = "SELECT * FROM `examen_clinico_realizacion` WHERE id_examen = 2;";
    	$c_sql_3 = "SELECT * FROM `examen_clinico_realizacion` WHERE id_examen = 3;";
    	$c_sql_4 = "SELECT * FROM `examen_clinico_realizacion` WHERE id_examen = 4;";
    	$c_sql_5 = "SELECT * FROM `examen_clinico_realizacion` WHERE id_examen = 5;";
    	$c_sql_6 = "SELECT * FROM `examen_clinico_realizacion` WHERE id_examen = 6;";

    	//$c_sql = "SELECT * FROM `examen_clinico_realizacion` WHERE cantidad = (SELECT MIN(cantidad) FROM `insumo`)";
        
        $resultado1 = mysqli_query( $this->conexion, $c_sql_1 ) or die ( "Mal 1: ");
        $resultado2 = mysqli_query( $this->conexion, $c_sql_2 ) or die ( "Mal 2: ");
        $resultado3 = mysqli_query( $this->conexion, $c_sql_3 ) or die ( "Mal 3: ");
        $resultado4 = mysqli_query( $this->conexion, $c_sql_4 ) or die ( "Mal 4: ");
        $resultado5 = mysqli_query( $this->conexion, $c_sql_5 ) or die ( "Mal 5: ");
        $resultado6 = mysqli_query( $this->conexion, $c_sql_6 ) or die ( "Mal 6: ");
        
        $f1 = mysqli_num_rows($resultado1);
        $f2 = mysqli_num_rows($resultado2);
        $f3 = mysqli_num_rows($resultado3);
        $f4 = mysqli_num_rows($resultado4);
        $f5 = mysqli_num_rows($resultado5);
        $f6 = mysqli_num_rows($resultado6);


        if($f1 > $f2 && $f1 > $f3 && $f1 > $f4 && $f1 > $f5 && $f1 > $f6){
        	$c_sql = "SELECT * FROM `examen` WHERE id = 1;";
        	$sql = "SELECT * FROM `examen_clinico_realizacion` WHERE id_examen = 1 AND fecha_creacion LIKE '%$fecha%'";
        
	        $resultado = mysqli_query( $this->conexion, $c_sql ) or die ( "Algo ha ido mal ");
	        $resultadoF1 = mysqli_query( $this->conexion, $sql ) or die ( "Algo ha ido mal f2");
	        
	        $r = mysqli_fetch_assoc($resultado);
	        $r1 = mysqli_num_rows($resultadoF1);

	        echo "<div class='huge'>{$r1}</div>";
	        echo "<div> {$r['nombre']} Esta siendo el mas solicitado este mes</div>";
	        $entro = true;
        }



        if($f2 > $f1 && $f2 > $f3 && $f2 > $f4 && $f2 > $f5 && $f2 > $f6){
        	$c_sql = "SELECT * FROM `examen` WHERE id = 2;";
        	$sql = "SELECT * FROM `examen_clinico_realizacion` WHERE id_examen = 2 AND fecha_creacion LIKE '%$fecha%'";
        
	        $resultado = mysqli_query( $this->conexion, $c_sql ) or die ( "Algo ha ido mal ");
	        $resultadoF1 = mysqli_query( $this->conexion, $sql ) or die ( "Algo ha ido mal f2");
	        
	        $r = mysqli_fetch_assoc($resultado);
	        $r1 = mysqli_num_rows($resultadoF1);

	        echo "<div class='huge'>{$r1}</div>";
	        echo "<div> {$r['nombre']} Esta siendo el mas solicitado este mes</div>";
	        $entro = true;
        }



        if($f3 > $f1 && $f3 > $f2 && $f3 > $f4 && $f3 > $f5 && $f3 > $f6){
        	$c_sql = "SELECT * FROM `examen` WHERE id = 3;";
        	$sql = "SELECT * FROM `examen_clinico_realizacion` WHERE id_examen = 3 AND fecha_creacion LIKE '%$fecha%'";
        
	        $resultado = mysqli_query( $this->conexion, $c_sql ) or die ( "Algo ha ido mal ");
	        $resultadoF1 = mysqli_query( $this->conexion, $sql ) or die ( "Algo ha ido mal f2");
	        
	        $r = mysqli_fetch_assoc($resultado);
	        $r1 = mysqli_num_rows($resultadoF1);

	        echo "<div class='huge'>{$r1}</div>";
	        echo "<div> {$r['nombre']} Esta siendo el mas solicitado este mes</div>";
	        $entro = true;
        }



        if($f4 > $f1 && $f4 > $f2 && $f4 > $f3 && $f4 > $f5 && $f4 > $f6){
        	$c_sql = "SELECT * FROM `examen` WHERE id = 4;";
        	$sql = "SELECT * FROM `examen_clinico_realizacion` WHERE id_examen = 4 AND fecha_creacion LIKE '%$fecha%'";
        
	        $resultado = mysqli_query( $this->conexion, $c_sql ) or die ( "Algo ha ido mal ");
	        $resultadoF1 = mysqli_query( $this->conexion, $sql ) or die ( "Algo ha ido mal f2");
	        
	        $r = mysqli_fetch_assoc($resultado);
	        $r1 = mysqli_num_rows($resultadoF1);

	        echo "<div class='huge'>{$r1}</div>";
	        echo "<div> {$r['nombre']} Esta siendo el mas solicitado este mes</div>";
	        $entro = true;
        }



        if($f5 > $f2 && $f5 > $f3 && $f5 > $f4 && $f5 > $f1 && $f5 > $f6){
        	$c_sql = "SELECT * FROM `examen` WHERE id = 5;";
        	$sql = "SELECT * FROM `examen_clinico_realizacion` WHERE id_examen = 5 AND fecha_creacion LIKE '%$fecha%'";
        
	        $resultado = mysqli_query( $this->conexion, $c_sql ) or die ( "Algo ha ido mal ");
	        $resultadoF1 = mysqli_query( $this->conexion, $sql ) or die ( "Algo ha ido mal f2");
	        
	        $r = mysqli_fetch_assoc($resultado);
	        $r1 = mysqli_num_rows($resultadoF1);

	        echo "<div class='huge'>{$r1}</div>";
	        echo "<div> {$r['nombre']} Esta siendo el mas solicitado este mes</div>";
	        $entro = true;
        }




        if($f6 > $f2 && $f6 > $f3 && $f6 > $f4 && $f6 > $f5 && $f6 > $f1){
        	$c_sql = "SELECT * FROM `examen` WHERE id = 6;";
        	$sql = "SELECT * FROM `examen_clinico_realizacion` WHERE id_examen = 6 AND fecha_creacion LIKE '%$fecha%'";
        
	        $resultado = mysqli_query( $this->conexion, $c_sql ) or die ( "Algo ha ido mal ");
	        $resultadoF1 = mysqli_query( $this->conexion, $sql ) or die ( "Algo ha ido mal f2");
	        
	        $r = mysqli_fetch_assoc($resultado);
	        $r1 = mysqli_num_rows($resultadoF1);

	        echo "<div class='huge'>{$r1}</div>";
	        echo "<div> {$r['nombre']} Esta siendo el mas solicitado este mes</div>";
	        $entro = true;
        }


        if($entro == false){
        	echo "<div class='huge'> - </div>";
	        echo "<div> Aqui se mostrara el examen mas solicitado</div>";
        }
        

        return $ret;
    }




    


 }