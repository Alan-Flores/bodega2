<?php
    
    $seleccionar = "SELECT * FROM products";

    $base = mysqli_connect('localhost', 'root', '', 'deloalto');
    $ejecutar = mysqli_query ($base, $seleccionar);
//$ejecutar_ejercito_comp = mysqli_query ($ejercito, $selec_update);

    $actualizar = "UPDATE products  SET category_id = '15' WHERE category_id='45'";
        $ejecutar = mysqli_query($base, $actualizar);
  

?>