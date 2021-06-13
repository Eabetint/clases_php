<?php
$limit=20;
for ($i=0; $i <=$limit ; $i++) { 
    echo "el conteo va en . $i. <br>";
}
$a=5;
while ($a <= $limit) {
    $a=$a*2;
    echo "a es $a <br>";
}

//mostrar los numeros pares del 0 hasta el 100
for ($i=1; $i <= 100; $i++) { 
    if (($i%2)==0) {
        echo "$i es par <br>";
    
    }else{
        echo "$i es impar <br>";
    }

}

$motos =['Vstrom 650xt',
'Akt 125',
'CBR 250R',
'R1M',
];

foreach ($motos as $key => $value) {
    echo "Llave :$key y Valor: $value <br>";
}

$auto = [
    "Mazda" => [
        "Cx5","323","CX7","2"
    ],
    "BMW"=>["serie 2","Z4","M1"]
];

var_dump($auto);
echo "<br>";
foreach ($auto as $marca => $modelos) {
    echo "En la marca $marca tenemos los modelos";
    foreach ($modelos as $key => $modelo) {
        echo "$modelo, ";
    }
    echo "<br>";
}

?>