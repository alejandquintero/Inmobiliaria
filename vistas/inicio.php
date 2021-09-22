<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles-dist.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist&display=swap" rel="stylesheet">
    <title>Inmobiliaria</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="white-1">
        <div class="contenedor__logo">
            <a href="" class="home"><img src="img/logo-6.png" alt="logo" class="logo"></a>
        </div>
        <a href="vistas/ayuda.php"><span class="material-icons-outlined help">contact_support</span></a>
    </div>
    <div class="contenedor__entrada" id="contenedor__entrada">
        <h1>¡Empecemos la búsqueda de tu nuevo hogar!</h1>  
    </div>
    <div class="contenedor__formulario" id="contenedor__formulario">
        <form action="index.php" method="POST" class="formulario">
            <label class="seccion-1">Precio</label>
            <div class="contenedor__select">
                <div class="min">
                    <label class="label" for="pre-min">Mínimo (&euro;)</label>
                    <div class="contenedor__select__style">
                        <select name="pre-min" id="pre-min" class="select">
                            <option value="600" selected>600</option>
                            <option value="700">700</option>
                            <option value="800">800</option>
                            <option value="900">900</option>
                            <option value="1000">1000</option>
                            <option value="1100">1100</option>
                            <option value="1200">1200</option>
                        </select>
                        <i class="flecha"></i>
                    </div>
                </div>
                <div class="max">
                    <label class="label" for="pre-max">Máximo (&euro;)</label>
                    <div class="contenedor__select__style">
                        <select name="pre-max" id="pre-max" class="select">
                            <option value="600">600</option>
                            <option value="700">700</option>
                            <option value="800" >800</option>
                            <option value="900">900</option>
                            <option value="1000">1000</option>
                            <option value="1100">1100</option>
                            <option value="1200" selected>1200</option>
                        </select>
                        <i class="flecha"></i>
                    </div>
                </div>
            </div>
            <label class="seccion-1">Tamaño</label>
            <div class="contenedor__select">
                <div class="min">
                    <label class="label" for="tam-min">Mínimo (m<sup>2</sup>)</label>
                    <div class="contenedor__select__style">
                        <select name="tam-min" id="tam-min" class="select">
                            <option value="40" selected>40</option>
                            <option value="60">60</option>
                            <option value="80">80</option>
                        </select>
                        <i class="flecha"></i>
                    </div>
                </div>
                <div class="max">
                    <label class="label" for="tam-max">Máximo (m<sup>2</sup>)</label>
                    <div class="contenedor__select__style">
                        <select name="tam-max" id="tam-max" class="select">
                            <option value="40" >40</option>
                            <option value="60">60</option>
                            <option value="80" selected>80</option>
                        </select>
                        <i class="flecha"></i>
                    </div>
                </div> 
            </div>
            <label class="seccion-2">Habitaciones</label>
            <div class="contenedor__input">
                <label class="contenedor__radio__style">
                    <input type="radio" name="hab" value="1" checked>1
                    <i class="circle"></i>
                </label>
                <label class="contenedor__radio__style">
                    <input type="radio" name="hab" value="2">2
                    <i class="circle"></i>
                </label>
                <label class="contenedor__radio__style">
                    <input type="radio" name="hab" value="3">3
                    <i class="circle"></i>
                </label>
                <label class="contenedor__radio__style">
                    <input type="radio" name="hab" value="4">4 o más
                    <i class="circle"></i>
                </label>
            </div>
            <label class="seccion-2">Amoblada</label>
            <div class="contenedor__input">
                <label class="contenedor__radio__style">
                    <input type="radio" name="amu" value="Si" checked>Sí
                    <i class="circle"></i>
                </label>
                <label class="contenedor__radio__style">
                    <input type="radio" name="amu" value="No">No
                    <i class="circle"></i>
                </label>
            </div>
            <button type="submit" class="submit" id="submit">Buscar</button>
        </form>
    </div>
    <div class="white-2"><p class="pie">&copy; 2021 AT Home SL - Todos los derechos reservados.</p></div>
    <script src="js/scripts.js"></script> 
</body>
</html>