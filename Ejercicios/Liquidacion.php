<?php
$salario=$_GET["salario"] ?? "";
$cedula=$_GET["Cedula"] ?? "";
$nombre=$pension=$arl=$fsolidaridad=0;
$porcentajeSalud=0.04;
$porcentajePension=0.04;
$porcentajearl=0.005;
$slmv=1015000;
if ($salario) {
    $salud=$salario*$porcentajeSalud;
    $pension=$salario*$porcentajePension;
    $arl=$salario*$porcentajearl;
    if ($salario>(4*$slmv)) {
        $fsolidaridad=$salario*0.01;
    } else {
        $fsolidaridad=0;
    }
    
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liquidación</title>
</head>
<body>
    <form action="">
    <label>Salario</label>
    <input type="number" name="salario">
    <br>
    <label>Cedula</label>
    <input type="number" name="Cedula">
    <br>
    <input type="submit" value="Enviar">
    </form>
    <table border="1">
    <tr>
    <th>Cédula</th>
    <th>Salario</th>
    <th>Salud (4%)</th>
    <th>Pensión(4%)</th>
    <th>ALR</th>
    <th>Fondo de Pesion Solidaria (1% > 4 SMLV)</th>
    </tr>
    <tr>
    <td><?php echo $cedula ?></td>
    <td><?php echo $salario ?></td>
    <td><?php echo $salud ?></td> 
    <td><?php echo $pension ?></td>
    <td><?php echo $arl ?></td>
    <td><?php echo $fsolidaridad ?></td>
    </tr>
    
    </table>
</body>
</html>