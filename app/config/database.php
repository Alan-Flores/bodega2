<?php
$mysqli = new mysqli('localhost:3306', 'root', '', 'bodega2'); 

//$mysqli = new mysqli('localhost', 'root', '', 'consofne_deloalto_matriz');

$mysqli->set_charset("utf8");
mysqli_select_db($mysqli, "bodega2") or die ("Base de Datos no Encontrada </br>");

?>