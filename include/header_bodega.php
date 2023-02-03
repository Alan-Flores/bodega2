
<div class="izq">
    <?php
        include ('app/config/database.php');
        $usuario = $_SESSION["usuario"];
        $consulta="SELECT * FROM user WHERE email = '$usuario'";
        $ejecutar= $mysqli -> query($consulta);

        $result = mysqli_fetch_array($ejecutar);
        $nom = $result['nombre'];
        $ape = $result['apellido'];
        echo "$nom $ape";
    ?>
</div>
    
<div class="centro">
    <?php
        include ('app/config/database.php');
        $rut = $_SESSION["usuario"];
        $consulta = "SELECT CARGO FROM user WHERE email = '$rut' ";
        $ejecutar = $mysqli -> query($consulta);
   
        $fila = $ejecutar->fetch_row();
        $cargo = $fila[0];

        if ($cargo=='Admin') {
    ?>
            <a href="index.php?p=principalAdmin"><img src="page/images/home.png"></a>
    <?php
        }else {
    ?>
            <a href="index.php?p=principalBodega"><img src="page/images/home.png"></a>
    <?php
        }
    ?> 
</div>

<div class="derecha">
    <a href="app/acces/out.php?sal=si"><img src="page/images/cerrar.png"><br></a>
</div>