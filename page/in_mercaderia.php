<?php
include('app/acces/session.php');
include('app/config/database.php');
?>

<link rel="stylesheet" href="page/css/estilo.css" />
<script src="json/addProducts.js"></script>

<div class="contenedor">

    <h1 align="center">INGRESO DE MERCADERIA</h1>
    <div class="row justify-content-between encabezado">
        <?php
        include('include/header_admin_menu.php');
        ?>
    </div>
    <div>
        <div class="formulario">
            <form name="registro" id="myForm">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="fecha">Fecha</label>
                            <input type="date" tabindex="1" class="form-control is-valid focusNext" id="fecha" name="fecha" placeholder="" required>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="factura">N° Factura</label>
                            <input type="text" tabindex="2" class="form-control is-valid focusNext" id="factura" name="factura" placeholder="Ingrese el número de documento" required>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="proveedor">Proveedor</label>
                            <select class="form-control is-valid focusNext" tabindex="3" id="proveedor" name="proveedor" required>
                                <option value="0" required>Seleccione el Proveedor</option>
                                <?php
                                $query = $mysqli->query("SELECT * FROM vendor");
                                while ($prov = mysqli_fetch_array($query)) {
                                    echo '<option value="' . $prov['id'] . '">' . $prov['name'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                </div>

                <div class="row row-cols-5">
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="codigo">codigo</label>
                            <input type="text" tabindex="4" class="form-control is-valid focusNext" id="codigo" name="codigo" placeholder="Escanee el producto" onchange="alerta()" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" tabindex="5" class="form-control is-valid focusNext" placeholder="Nombre" id="nombre" name="nombre" required>
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="categoria">Categoria</label>
                            <select class="form-control is-valid focusNext" tabindex="7" id="categoria" name="categoria" required>
                                <option value="0">Seleccione Categoria</option>
                                <?php
                                $query = $mysqli->query("SELECT * FROM family");
                                while ($prov = mysqli_fetch_array($query)) {
                                    echo '<option value="' . $prov['id'] . '">' . $prov['name'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                </div>

                <div class="row row-cols-10 separador">

                    <div class="col">
                        <label for="cantidad">Cantidad</label>
                        <input type="text" tabindex="8" class="form-control is-valid focusNext" placeholder="Cant." id="cantidad" name="cantidad" onkeypress="mascara(this,cpf)" required>
                    </div>
                    <div class="col">
                        <label for="stock">Stock</label>
                        <input type="text" tabindex="11" class="form-control is-valid focusNext" placeholder="Stock" id="stock" name="stock" onkeypress="mascara(this,cpf)" required>
                    </div>
                    <div class="col">
                        <label for="costo">Costo</label>
                        <input type="text" tabindex="13" class="form-control is-valid focusNext" placeholder="$" id="costo" name="costo" onkeypress="mascara(this,cpf)" onblur="calcular();" onpaste="return false" required>
                    </div>
                    <div class="col">
                        <label for="precio_total">Total</label>
                        <input type="text" class="form-control is-valid" placeholder="$" id="precio_total" name="precio_total" required>
                    </div>
                    <div class="col">
                        <label for="ventasSC">Venta</label>
                        <input type="text" tabindex="14" class="form-control is-valid focusNext" placeholder="$" id="ventasc" name="ventasc" onkeypress="mascara(this,cpf)" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <!--
                                <input type="text" class="form-control is-valid" placeholder="Nombre de archivo" id="archivo" name="archivo" required>                               
                            -->
                    </div>
                    <div class="col-sm-2">
                        <!--
                                <input type="submit" class="btn btn-secondary btn-block" id="cargar" name="cargar" value="Cargar imagen"/>                            
                            -->
                    </div>
                    <div class="col">

                    </div>
                    <div class="col-sm-3">
                        <input type="submit" class="btn btn-warning btn-block" id="limpiar" name="limpiar" value="Limpiar" />
                    </div>
                    <div class="col-sm-3">
                        <input type="submit" tabindex="15" class="btn btn-primary btn-block focusNext" id="continuar" name="continuar" value="Continuar" />
                    </div>
                </div>

            </form>

            <div>
                <div id="productos">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    <div class="col">Item</div>
                                </th>
                                <th>
                                    <div class="col-sm-12">Producto</div>
                                </th>
                                <th>
                                    <div class="col">Cantidad</div>
                                </th>
                                <th>
                                    <div class="col">Costo</div>
                                </th>
                                <th>
                                    <div class="col">Subtotal</div>
                                </th>
                                <th>
                                    <div class="col">Acción</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody id="productos-tabla">

                        </tbody>
                        <thead id="suma-productos">

                        </thead>
                    </table>
                    <div class="row">
                        <div class="col-sm-2">
                            <!--
                                        <input type="text" class="form-control is-valid" placeholder="Nombre de archivo" id="archivo" name="archivo" required>                               
                                    -->
                        </div>
                        <div class="col-sm-2">
                            <!--
                                        <input type="submit" class="btn btn-secondary btn-block" id="cargar" name="cargar" value="Cargar imagen"/>                            
                                    -->
                        </div>
                        <div class="col">

                        </div>
                        <div class="col-sm-3">
                            <!--
                                        <input type="submit" class="btn btn-warning btn-block" id="limpiar" name="limpiar" value="Limpiar"/>   
                                    -->
                        </div>
                        <div class="col-sm-3">
                            <input type="submit" class="btn btn-success btn-block" onclick="guardar()" id="guardar-compra" name="guardar-compra" value="Guardar Compra" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/mascaramoneda.js"></script>
<script src="js/search.js"></script>
<script src="json/saveProducts.js"></script>

<script type="text/javascript">
    document.addEventListener('keypress', function(evt) {

        // Si el evento NO es una tecla Enter
        if (evt.key !== 'Enter') {
            return;
        }

        let element = evt.target;

        // Si el evento NO fue lanzado por un elemento con class "focusNext"
        if (!element.classList.contains('focusNext')) {
            return;
        }

        // AQUI logica para encontrar el siguiente
        let tabIndex = element.tabIndex + 1;
        var next = document.querySelector('[tabindex="' + tabIndex + '"]');

        // Si encontramos un elemento
        if (next) {
            next.focus();
            event.preventDefault();
        }
    });

    $(document).on('click', '.borrar', function(event) {
        event.preventDefault();
        $(this).closest('tr').remove();
        console.log(tabla);
    });
</script>