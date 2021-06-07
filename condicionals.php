<?php
$x=10;
$y="10";
if ($x== $y) {
    echo "Son iguales";
}

echo '<br>';

if ($x=== $y) {
    echo "Son identicos";
    
}else {
    echo "No son identicos";
}

echo '<br>';

if ($x != $y) {
    echo "Si Son Diferentes de identicos";
}

echo '<br>';

if ($x > $y) {
    echo " $x es mayor que $y";
}elseif ($x < $y) {
    echo " $x es menor que $y";
}elseif ($x == $y) {
    echo " $x es igual a  $y";
}
else {
    echo "Ninguna de las anteriores";
}

echo '<br>';

if (($x==$y) && ($x === $y)) {
    echo "$x es igual a $y y $x es mayor que 0";
}
if (($x==$y) || ($x > 0)) {
    echo "$x es igual a $y ó $x es identico a $y";
}

echo '<br>';

switch ($x) {
    case '10':
        echo "Es un 10";
        break;
    case '20':
         echo "Es un 20";
         break;    
    
    default:
        echo "Nada";
        break;
}
?>