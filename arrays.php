<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
<h1>Arrays</h1>
<?php
//array indexado
$nombre = ["Ana",
            "Sol",
            123, 
            true,
            500];

print ($nombre[2]);
print"<pre>\n";
print ($nombre[3]);
print"<pre>\n";
print ($nombre[4]);
echo "<br>";
print ($nombre[0]);
echo "<br>";
echo ("El índice 0 es:".$nombre[0]. "<br>");
//array asociativo
$alumno = [
    "dni" => 3654569,
    "apellido" => "luna",
    "nombre" => "miguel"];
    
    print"<pre>\n";
    print($alumno["dni"]);
    
    $alumno = ["dni" => 42856011];
    print"<pre>\n";
    print($alumno["dni"]);
    print"<pre>\n";
   // print"<p>El apellido del alumno es: </p>\n " .$alumno[1];
   echo ("El ".$alumno["dni"]." es mayor a 10 o menor a 2". "<br>");


?>
</body>
</html>