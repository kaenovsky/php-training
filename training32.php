<?php

echo "<br><br> ======================================== <br><br>";

echo "Ejercicio 1.2 - Realizar un generador de frases";

// Creamos los distintos array de frases

$firstSentence = array("Esta mañana decidí", "Esta tarde pensé que sería buena idea", "Este lunes se me ocurrió");
$secondSentence = array("preparar la comida", "bañarme", "arreglar mi auto");
$thirdSentence = array("y después", "pero antes pensé en", "aunque debía");
$forthSentence = array("planchar mi ropa", "estudiar", "pagar las cuentas pendientes");

// Hacemos echo de las frases de forma aleatora

echo "<br><br> ======================================== <br><br>";
$randomSent1 = mt_rand(0,2);
$randomSent2 = mt_rand(0,2);
$randomSent3 = mt_rand(0,2);
$randomSent4 = mt_rand(0,2);
echo "$firstSentence[$randomSent1] $secondSentence[$randomSent2]
 $thirdSentence[$randomSent3] $forthSentence[$randomSent4]";
 ?>
