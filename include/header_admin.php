<div class="izq">
    <?php
        include ('app/config/database.php');

        $user = $_SESSION["usuario"];
        $consulta="SELECT * FROM user WHERE user = '$user'";
        $ejecutar= $mysqli -> query($consulta);
    
        $result = mysqli_fetch_array($ejecutar);
        $nom = $result['name'];
        $ape = $result['surname'];
        echo "$nom $ape";
    ?>

</div>
            
<div class="derecha">
    <a href="app/acces/out.php?sal=si"><img src="page/images/cerrar.png"><br></a>
</div>
