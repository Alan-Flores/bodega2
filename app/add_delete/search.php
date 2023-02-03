<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo = htmlspecialchars(trim($_POST["codigo"]));
 
    // Codigo para buscar en tu base de datos acá
 
 
    include ('../config/database.php');
 
    $sqlsi = "SELECT * FROM products WHERE code = '$codigo'";
    $resultado = $mysqli->query($sqlsi);
    $dato = $resultado->fetch_assoc();
        $nombre = $dato['name'];
        $category = $dato['group_id'];
        $cantidad = $dato['stock'];

    echo json_encode([
        'name' => $nombre,
        'family' => $category,
        'stock' => $cantidad,          
     ]);

    //echo $category;
 
} else {
    echo "<p>No se encontro el nombre en la DB!!</p>";
}
?>