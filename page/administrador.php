<?php
include('app/acces/session.php');
?>

<link rel="stylesheet" href="page/css/estilo.css" />

<div class="contenedor">
    <h1 align="center">ADMINISTRADOR BODEGA</h1>
    <div class="row justify-content-between encabezado">
        <?php
        include('include/header_admin.php');
        ?>
    </div>

    <div>
        <table align="center" class="tabla">
            <tr height="150">
                <td width="200">
                    <center><a class="modulos" href="index.php?p=in_mercaderia"><img src="page/images/adp.png"></a>
                        <br><br><br>Ingresar mercaderia
                <td>
                    </center>
                <td width="200">
                    <center><a class="modulos" href="mod_producto.php"><img src="page/images/modp.png"></a>
                        <br><br><br>Modificar poducto
                <td>
                    </center>
                <td width="200">
                    <center><a class="modulos" href="eliminar_producto.php"><img src="page/images/elp.png"></a>
                        <br><br><br>Eliminar producto
                <td>
                    </center>
                <td width="200">
                    <center><a class="modulos" href="realizar_entrega.php"><img src="page/images/entrega.png"></a>
                        <br><br><br>Entrega de productos
                <td>
                    </center>
                <td width="200">
                    <center><a class="modulos" href="entregas.php"><img src="page/images/entregado.png"></a>
                        <br><br><br>Entregas realizadas
                <td>
                    </center>
            </tr>
        </table>

    </div>

    <div align="center">
        <!--<h2>CONTROL DE PERSONAL</h2>-->
    </div>

    <div>
        <table align="center" class="tabla">
            <tr height="150">
                <td width="200">
                    <center><a class="modulos" href="crear_personal.php"><img src="page/images/ad.png"></a>
                        <br><br><br>Registrar personal
                <td>
                    </center>
                <td width="200">
                    <center><a class="modulos" href="mod_personal.php"><img src="page/images/mod.png"></a>
                        <br><br><br>Modificar personal
                <td>
                    </center>
                <td width="200">
                    <center><a class="modulos" href="eliminar_personal.php"><img src="page/images/el.png"></a>
                        <br><br><br>Eliminar personal
                <td>
                    </center>
            </tr>
        </table>

    </div>
</div>