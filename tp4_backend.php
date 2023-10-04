<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP 4</title>
</head>
<body>
<h1>Trabajo Práctico 4</h1>
    <strong><p>Punto 1.</p></strong>
<?php
//1. Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.
$num = [2,4,6,8,10,12,14,16,18,20];

foreach ($num as $numero) {//bucle foreach para recorrer el array e imprimir c num seguido de un salto de línea (<br>) 
    echo $numero . "<br>";
}
echo "<br>";
?>
<strong><p>Punto 2.</p></strong>
<?php
//Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, 
//sin asignar el índice de la matriz. Mostrar el esquema del array con print_r().
$nombres = ["Pedro", "Ana", 34, 1];
print "<pre>\n";
print_r($nombres);
echo "<br>";
?>
<strong><p>Punto 3.</p></strong>
<?php
//array asociativo
$persona = ["Nombre" => "Pedro",
"Apellido" => "Torres",
"Dirección" => "Av. Mayor 3703",
"Teléfono" => 1122334455
];
foreach($persona as $pers){
    echo $pers . "<br>";
}
echo "<br>";
?>
<strong><p>Punto 4.</p></strong>
<?php
//Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y
//Chicago, sin asignar índices al array. A continuación, muestra el contenido del array.
//Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid.

$ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles","Chicago"];

foreach ($ciudades as $cdad) {
    echo "La ciudad con el índice " . array_search($cdad, $ciudades) . " tiene el nombre " . $cdad . " <br>";
}
echo "<br>";
?>
<strong><p>Punto 5.</p></strong>
<?php
/*Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona,
LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago.
Ejemplo: El índice de Madrid es MD.*/

$ciudades = ["MD" => "Madrid",
            "BLC" => "Barcelona",
            "LD" => "Londres",
            "NY" => "New York",
            "LA" => "Los Angeles",
            "CCG" => "Chicago"
];
foreach($ciudades as $cdad){
    echo "El índice de " .array_search($cdad, $ciudades) . " es: " . $cdad ."<br>";
}
?>


</body>
</html>