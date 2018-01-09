<?php
//configuracion para conexion php con bd (mysql)

$usuario='root';
$password='';
$nombre_de_basedatos='recursos_humanos';
$puerto='80';
$host='localhost';
//$cadena="host=$host port=$puerto dbname=$nombre_de_basedatos user=$usuario password=$password";
//esta variable asigna los valores almacenados en variables anteriores
$con=mysqli_connect("$host","$usuario","$password","$nombre_de_basedatos") or die ("Error de conexion con la BD".mysql_error());

?>
