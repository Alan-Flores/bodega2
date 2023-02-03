<?php

    include('../config/database.php');

    $codigo = $_POST['codigo'];
    $consulta = "SELECT * FROM PRODUCTOS WHERE COD_PRODUCTO = ".$codigo;
    
    $comprobar_existencia= $mysqli ->query($consulta); 

    if (mysqli_fetch_array($comprobar_existencia)!=null ) {
        echo "Ya existe un producto asociado al código ingresado, intentelo nuevamente";
    }else{
        
        $descripcion = $_POST['descripcion'];
        $stock = $_POST['stock'];
        $proveedor = $_POST['proveedor'];
        $fecha = $_POST['fecha'];

        $consulta = "INSERT INTO PRODUCTOS VALUES ('$codigo','$descripcion','$stock','$proveedor','$fecha')";
        $mysqli->query($consulta);    
    }

?>