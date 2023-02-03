<?php

$pass = md5('S0f1o2i0#');

$conexion = mysqli_connect("localhost:3306", "root","") or die("no conectado </br>");
mysqli_set_charset($conexion, 'utf8');
mysqli_select_db($conexion, "bodega") or die ("Base de Datos no Encontrada </br>");

$consulta = "INSERT INTO user(nombre, apellido, email, cargo, password) VALUES ('Alan', 'Flores', 'alan.flores@elmec.cl', 'Admin', '$pass')";
$ejecutar = mysqli_query($conexion, $consulta) or die("Error al insertar datos");
echo "Se insertaron los datos correctamente";

?>