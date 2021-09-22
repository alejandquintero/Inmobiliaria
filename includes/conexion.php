<?php
    class ConexionMysql{

        const DB_HOST = "localhost";
        const DB_USER = "athome";
        const DB_PASSWORD = "1234";
        const DB_NAME = "inmobiliaria";
 
        const COD_ERR_CONECTAR = 0;
        const COD_ERR_USAR = 1;
 
        private $conexion = null;
     
        public function conectar(){
            $this->conexion = @mysqli_connect(self:: DB_HOST, self:: DB_USER, self:: DB_PASSWORD);
            if(!$this->conexion){
                throw new \Exception ("Error: ".mysqli_connect_error(), self::COD_ERR_CONECTAR);
            }
        }

        public function desconectar(){
            if($this->conexion){
                mysqli_close($this->conexion);
            }
        }

        public function usar($nombre){
            if(!mysqli_select_db($this->conexion, $nombre)){
                throw new \Exception("Error: ".mysqli_error($this->conexion), self::COD_ERR_USAR);
            }
        }

        public function seleccionar(string $tabla, array $campos=[], string $condicion_where = "", string $condicion_order = ""){
            
            if($campos === []){
                $consulta = "SELECT * FROM ".$tabla." ".$condicion_where." ".$condicion_order.";";
                $resultado = mysqli_query($this->conexion, $consulta);

                /* Aquí haremos un foreach dentro de while para mostrar los datos utilizando variables, estaríamos haciendo implícitamente
                   lo que está dentro de este while:
                
                     while($datos_tabla = mysqli_fetch_assoc($resultado_consulta)){
                         $id = $datos_tabla['id_usuario'];
                         $nombre = $datos_tabla['nombre'];
                         $apellidos = $datos_tabla['apellidos'];
                         $email = $datos_tabla['email'];
                         echo $nombre." ".$email."<br/>";
                     }
                    
                */
                
                while($datos_tabla = mysqli_fetch_assoc($resultado)){
                    foreach($datos_tabla as $clave => $valor){
                        echo $valor." ";
                    }
                    echo "<br/>";
                }
            
            }else{
                
                $consulta = "SELECT ".implode(',',$campos)." FROM ".$tabla." ".$condicion_where." ".$condicion_order.";";

                $resultado = mysqli_query($this->conexion, $consulta);

                if(mysqli_num_rows($resultado) == 0){
                    
                    include_once("vistas/sin_resultados.php");
                
                }else{
                    include_once("vistas/resultado.php");
                    echo" <div class='contenedor_header'>
                            <div class='contenedor__logo'>
                                <a href='index.php' class = 'home'><img src='img/logo-6.png' alt='logo' class='logo'></a>
                            </div>
                            <a href='vistas/ayuda.php'><span class='material-icons-outlined help'>contact_support</span></a>
                          </div>";
                    echo "<div class='resultados'>";
                    while($datos_tabla = mysqli_fetch_assoc($resultado)){
                        echo "<a href='vistas/detalles.php?localidad=".$datos_tabla['localidad']."&precio=".$datos_tabla['precio']."
                             &habitaciones=".$datos_tabla['habitaciones']."&metros=".$datos_tabla['metros']."&fecha=".$datos_tabla['fecha']."
                             &amoblada=".$datos_tabla['amoblada']."&telefono=".$datos_tabla['telefono']."&nombre=".$datos_tabla['nombre']."
                             &apellidos=".$datos_tabla['apellidos']."&imagen=".$datos_tabla['imagen']."' class='detalles'>";
                            
                            echo "<div class='contenedor__resultado--img'><img class='img' alt='vivienda' src= '".$datos_tabla['imagen']."'</img></div>";
                            echo "<div class ='contenedor__resultado--info'>";
                                echo "<h2 class='titulo__resultado'><span class='material-icons-outlined icon'>location_on</span> Vivienda en ".$datos_tabla['localidad']."</h2>";
                                echo "<p class ='parrafo'>".$datos_tabla['precio']." &euro;</p>";
                                echo "<p class = 'parrafo'>".$datos_tabla['habitaciones']." hab. ".$datos_tabla['metros']." m<sup>2</sup>. Construcción: "
                                    .$datos_tabla['fecha']." Amoblada: ".$datos_tabla['amoblada'];
                                echo "<p class='parrafo'><span class='material-icons-outlined icon'>phone</span>".$datos_tabla['telefono']."</p>";
                                echo "</div>";
                        echo "</a>";
                    } 
                    echo "</div>";
                    echo "<div class='atras'><a href='vistas/regresar.php' class='back back-resultados' id='back'>Atrás</a></div>";
                }

              
            } 
        } 
    }

?>
