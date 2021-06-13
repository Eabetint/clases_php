<?php
require_once("functions.php");
$Num1=$_GET["n1"] ?? 0;
$Num2=$_GET["n2"] ?? 0;
$Num3=$_GET["n3"] ?? 0;

function Calculadora(int $Num1, int $Num2, string $Num3)
{
    $res = " ";

    switch ($Num3) {
        case "S":
            $res = Suma($Num1, $Num2);
            break;
        case "-":
            $res = Resta($Num1, $Num2);
            break;
        case "*":
            $res = Producto($Num1, $Num2);
            break;
        case "/":
            $res = Cociente($Num1, $Num2);
            break;
        default:
            $res = "No eligio una opción válida";
            break;
    }
    return "$Num1 $Num3 $Num2 =$res";
}

echo Calculadora($Num1, $Num2, $Num3);
