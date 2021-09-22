<?php

include("includes/conexion.php");

    $conexion = new ConexionMySQL;

    if(isset($_POST['pre-min']) && isset($_POST['pre-max']) &&  isset($_POST['tam-min'])
        && isset($_POST['tam-max']) && isset($_POST['hab']) &&  isset($_POST['amu'])){
            
            $precio_min = isset($_POST['pre-min']) ? $_POST['pre-min'] : '' ; // Precio mínimo
            $precio_max = isset($_POST['pre-max']) ? $_POST['pre-max'] : '' ; // Precio máximo
            $tam_min = isset($_POST['tam-min']) ? $_POST['tam-min'] : '';  //  Tamaño mínimo   
            $tam_max = isset($_POST['tam-max']) ? $_POST['tam-max'] : '';   // Tamaño máximo
            $num_hab= isset($_POST['hab']) ? $_POST['hab'] : '' ;   // Numero de habitaciones
            $amoblada = isset($_POST['amu']) ? $_POST['amu'] : '' ; // Si está o no amoblada

            if($num_hab <= 3){
                $condicion_where = "WHERE P.contacto = Pr.dni AND precio BETWEEN ".$precio_min." AND ".$precio_max. 
                                   " AND metros BETWEEN ".$tam_min." AND ".$tam_max.
                                   " AND habitaciones = ".$num_hab. 
                                   " AND amoblada = "."'$amoblada'";
            }else{
                $condicion_where = "WHERE P.contacto = Pr.dni AND precio BETWEEN ".$precio_min." AND ".$precio_max. 
                                   " AND metros BETWEEN ".$tam_min." AND ".$tam_max.
                                   " AND habitaciones >= ".$num_hab. 
                                   " AND amoblada = "."'$amoblada'";     
            }
  
            try{
                $conexion ->conectar();
                $conexion->usar("inmobiliaria");
                $conexion ->seleccionar("pisos P, propietarios Pr", ["precio","metros","habitaciones","fecha", "amoblada","localidad","telefono","imagen","nombre","apellidos"], $condicion_where);
            }
        
            catch(\Exception $e){
                    echo "Ha ocurrido un error: ".$e->getMessage()."<br/>";
                    if($e->getCode()== 0){
                        echo "Error de conexion <br/>";
                    }else if ($e->getCode()== 1){
                        echo "No se ha podido seleccionar la base de datos. <br/>";
                    }

            }

            finally{
                $conexion -> desconectar();
            }     
   
    }else{
        include_once("vistas/inicio.php");
    }  
    





?>