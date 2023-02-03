<div class="izq">
    <?php
    include('app/config/database.php');

    $user = $_SESSION["usuario"];
    $consulta = "SELECT * FROM user WHERE user = '$user'";
    $ejecutar = $mysqli->query($consulta);

    $result = mysqli_fetch_array($ejecutar);
    $nom = $result['name'];
    $ape = $result['surname'];
    echo "$nom $ape";
    ?>

</div>
<div class="centro">
    <?php
    $consulta = "SELECT charge_id FROM user WHERE user = '$user' ";
    $ejecutar = $mysqli->query($consulta);

    $fila = $ejecutar->fetch_row();
    $cargo = $fila[0];

    if ($cargo == 1) {
        echo "<a href=index.php?p=administrador><center><img src='page/images/home.png'><center></a>";
    } else {
        echo "<a href=index.php?p=bodeguero><img src='page/images/home.png'></a>";
    };

    error_reporting(E_ALL  ^  E_NOTICE  ^  E_WARNING);
    ?>
</div>

<div class="derecha">
    <a href="app/acces/out.php?sal=si"><img src="page/images/cerrar.png"><br></a>
</div>