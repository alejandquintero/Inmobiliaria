<?php  

    $imagen = isset($_GET['imagen']) ? $_GET['imagen'] : "";
    $nombre = isset($_GET['nombre']) ? $_GET['nombre'] : "";   
    $apellidos = isset($_GET['apellidos']) ? $_GET['apellidos'] : "";
    $telefono = isset($_GET['telefono']) ? $_GET['telefono'] : "";
    $localidad = isset($_GET['localidad']) ? $_GET['localidad'] : "";
    $precio = isset($_GET['precio']) ? $_GET['precio'] : "";
    $habitaciones = isset($_GET['habitaciones']) ? $_GET['habitaciones'] : "";
    $metros = isset($_GET['metros']) ? $_GET['metros'] : "";
    $amoblada = isset($_GET['amoblada']) ? $_GET['amoblada'] : "";
    $fecha = isset($_GET['fecha']) ? $_GET['fecha'] : "";
      
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/styles-dist.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist&display=swap" rel="stylesheet">
    <title>Inmobiliaria</title>
    <link rel="icon" href="../img/favicon.ico" type="image/x-icon">
</head>
<body >
    <div class="white-1">
        <div class="contenedor__logo">
            <a href="../index.php" class="home"><img src="../img/logo-6.png" alt="logo" class="logo"></a>
        </div>
        <a href="ayuda.php"><span class="material-icons-outlined help">contact_support</span></a>
    </div>
    <div class="contenedor_detalles">
        <div class="contenedor_detalles_info_img">
            <div class="contenedor_img_detalles">
                <img src="../<?php echo $imagen ?>" alt="apartamento" class="img-detalles">
            </div>
            <div class="contenedor_info_detalles">
                <h2 class='titulo__resultado-detalles'><span class='material-icons-outlined icon'>location_on</span> Vivienda en <?php echo $localidad;?></h2>
                    <p class ='parrafo-detalles'><?php echo $precio ?>&euro;</p>
                    <p class = 'parrafo-detalles'><?php echo $habitaciones; ?> hab. <?php echo $metros; ?>m<sup>2</sup>. 
                        Construcción: <?php echo $fecha; ?> Amoblada: <?php echo $amoblada; ?>
                    <p class='parrafo-detalles'><span class='material-icons-outlined icon'>phone</span><?php echo $telefono; echo " ".$nombre." ".$apellidos ?></p>
            </div>
            
        </div>
        <a href='javascript: history.go(-1)' class='back' id='back'>Atrás</a>
    </div>
    <div class='white-2'><p class="pie">&copy; 2021 AT Home SL - Todos los derechos reservados.</p></div>
    <script src="js/scripts.js"></script>
</body>
</html>