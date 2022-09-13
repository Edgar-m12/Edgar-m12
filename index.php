<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Simply Me</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 20px Montserrat, sans-serif;
    line-height: 1.8;
    color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
    background-color: #1abc9c; /* Green */
    color: #ffffff;
  }
  .bg-2 { 
    background-color: #474e5d; /* Dark Blue */
    color: #ffffff;
  }
  .bg-3 { 
    background-color: #ffffff; /* White */
    color: #555555;
  }
  .bg-4 { 
    background-color: #2f2f2f; /* Black Gray */
    color: #fff;
  }
  .container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
  }
  .navbar {
    padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
    color: #1abc9c !important;
  }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Instituto Tecnológico de Tijuana </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Materia</a></li>
        <li><a href="#">Unidad</a></li>
        <li><a href="https://www.taloselectronics.com/blogs/tutoriales/como-usar-pantalla-lcd-con-i2c-con-raspberry">Raspberry Pi Pico and CircuitPython</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <h3 class="margin">Edgar Muñoz </h3>
  <img src="bird.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
  <h3>Ing. Sistemas Computacionalesr</h3>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
  <h3 class="margin">SPBB22-Exposiciones de los sensores del Simulador </h3>
  <p>Wokwi fue desarrollado por el mismo Uri y otros colaboradores. El simulador permite trabajar con algunas versiones populares de las tarjetas Arduino, con la Raspberry Pi Pico, ESP32 y hasta con el ATtiny85. Además, cuenta con un buen grupo de periféricos comúnmente usados en los proyectos de electrónica, a esto se suma la ventaja de no tener que esperar a tener todo el hardware en las manos para comenzar las pruebas y que no vamos a poder dañar nada durante las pruebas al trabajar con un hardware virtual. </p>
  <a href="https://palmacas.com/simulador-wokwi/" class="btn btn-default btn-lg">
    <span class="glyphicon glyphicon-search"></span> Search
  </a>
</div>

<!-- Third Container (Grid) -->
<div class="container-fluid bg-3 text-center">    
  <h3 class="margin">Investigación de un D10 LCD 16x2</h3><br>
  <div class="row">
  	<div class="col-sm-4"> 
      <p>CONEXION DE UNA PANTALLA LCD 16x2 A LA RASPBERRY PI 3 USANDO 4 BITS </p>
      <img src="https://alinos.sytes.net/raspberrypi/lcd/lcd1.png" class="img-responsive margin" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-4"> 
      <p><b>Material:</b>
Raspberry pi 3,
Pantalla lcd 16x2 con i2c,
Modulo convertidor de nivel lógico,
Cables dupont macho hembra 20cm,
Fuente de alimentación 5v@3A</p>
      <img src="https://cdn.shopify.com/s/files/1/0020/8027/6524/files/GPIO_piout_rasp_1024x1024.png?v=1597780984" class="img-responsive margin" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-4">
      <p>1. Los pines SDA y SCL se conectan a la Raspberry en el lugar indicado para el protocolo I2C. El VCC lo conectamos a 3.3v 
<br>
2. Es recomendable utilizar un convertidor de voltaje ya que la pantalla trabaja a 5v y nuestra tarjeta trabaja a 3.3v.  
<br>
3. El módulo convertidor de nivel lógico TTL de 3.3 / 5 resuelve el problema de acoplar dispositivos que funcionan con distintos niveles de voltaje, ideal para arduino y raspberry.</p>
      <img src="https://botboss.files.wordpress.com/2015/07/lcd-16x2-conexion1.png" class="img-responsive margin" style="width:100%" alt="Image">
    </div>
    
    
  </div>
</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Materia <a href="#">Sistemas Programables</a></p> 
</footer>

</body>
</html>
