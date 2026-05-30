<!DOCTYPE html>
<html lang="es-mx">
<head>
<meta charset="UTF-8">
<title>Práctica 12-Gpo XB</title>
<link rel="stylesheet" href="css/estilos.css"/>
<link rel="stylesheet" href="css/menu.css"/>
<link rel="stylesheet" href="css/problemas.css"/>
<link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
<section class="wrapper">
<header>
<h1 class="logo"><a href="index.html">phpStem</a></h1>
<nav>
<ul>
<li><a href="index.php" class="current">Inicio</a></li>
<li><a href=acercade.php>Acerca de</a></li>
</ul>
</nav>
</header>
<section id="contenedor">
<section class="problema">
<h2>Problema: Cálcular la densidad de la Tierra</h2>
<p>Descripción:</p>
<p>El radio de la Tierra es 6 378 km y su masa es 5.97E24 kg. <br>
a) ¿Cuál es la densidad promedio de la Tierra?<br>
b) Si el radio de la Tierra se redujera a una tercera parte y su masa no cambiará, cuál serı́a su densidad?<br>
c) Si el radio de la Tierra y su masa se redujera a una
tercera parte, ¿su densidad serı́a la misma? ¿por qué?</p>
</section>
<section class="formulas">
<h2>Fórmulas</h2>
Densidad = Masa/Volumen<br>
Volumen=(4/3)pi*r*r*r
</section>
<section class="datos">
<h2>Datos:</h2>
m= 5.97E24 Kg. <br>
r= 6378 Km.
</section>
<section class="calculos">
  <h2>Solución</h2>
  <p><b>a)</b> La densidad de la Tierra es calculada con sus valores originales.</p>
  <p><b>b)</b> Si el radio se reduce a una tercera parte, dividimos el radio original entre 3.</p>
  <p><b>c)</b> Si la masa y el radio se reducen a una tercera parte, dividimos ambos valores entre 3.</p>
</section>

<?php
function calcula_densidad_a(){
  $PI = 3.141592;
  $masa = 5.97E24;
  $radio = 6378000;
  $volumen = (4/3) * $PI * ($radio * $radio * $radio);
  return $masa / $volumen;
}

function calcula_densidad_b(){
  $PI = 3.141592;
  $masa = 5.97E24;
  $radio = 6378000 / 3; 
  $volumen = (4/3) * $PI * ($radio * $radio * $radio);
  return $masa / $volumen;
}

function calcula_densidad_c(){
  $PI = 3.141592;
  $masa = 5.97E24 / 3; 
  $radio = 6378000 / 3; 
  $volumen = (4/3) * $PI * ($radio * $radio * $radio);
  return $masa / $volumen;
}
?>

<section class="resultado">
  <h2>Resultados:</h2>
  <?php
    echo "<h3>a) Densidad original = " . round(calcula_densidad_a(), 2) . " kg/m³</h3>";
    echo "<h3>b) Densidad con radio a 1/3 = " . round(calcula_densidad_b(), 2) . " kg/m³</h3>";
    echo "<h3>c) Densidad con masa y radio a 1/3 = " . round(calcula_densidad_c(), 2) . " kg/m³</h3>";
    
    echo "<p><strong>¿Su densidad sería la misma en el inciso c?</strong><br> 
    No. Porque el volumen es una medida cúbica. Al reducir el radio a una tercera parte, el volumen disminuye 27 veces (3³), pero la masa solamente se redujo 3 veces. Esto provoca que la densidad aumente 9 veces respecto a la original.</p>";
  ?>
</section>
<footer class="pie">
Creative Commons versión 3.0 SciSoft 2025
</footer>
</section>
</body>
</html>