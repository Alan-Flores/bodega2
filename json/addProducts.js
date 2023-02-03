var tabla = [
    {
        id: "",
        fecha: "",
        factura: "",
        proveedor: "",
        codigo: "",        
        producto: "",
        categoria: "",
        cantidad: "",
        stock: "",
        costo: "",
        subtotal: "",
        total: ""
    }
];

window.onload = mostrarProductos;

function mostrarProductos(){

    document.getElementById("myForm").addEventListener("submit", nuevoProducto, false); 
    document.getElementById("limpiar").addEventListener("click", limpiarFormulario, false);   
}



function nuevoProducto(event){
    event.preventDefault();

    var date = document.getElementById("fecha").value;
    var factura = document.getElementById("factura").value;
    var proveedor = document.getElementById("proveedor").value;
    var code = document.getElementById("codigo").value;
    var name = document.getElementById("nombre").value;
    var categoria = document.getElementById("categoria").value;
    var cant = document.getElementById("cantidad").value;
    var cant2 = cant.replace(/[\,]/g,'');
    var stock = document.getElementById("stock").value;
    var cost = document.getElementById("costo").value;
    var cost2 = cost.replace(/[\,]/g,'');
    var total = cost2 * cant2;
    var subtotal = addCommas(parseFloat(total));

    function addCommas(nStr){
        nStr += '';
        x = nStr.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + ',' + '$2');
        }
        return x1 + x2;
    }

    var nuevoProducto = 
    {
        fecha: date,
        factura: factura,
        proveedor: proveedor,
        codigo: code,        
        producto: name,
        categoria: categoria,
        cantidad: cant,
        stock: stock,
        costo: cost,
        subtotal: subtotal,
        total: total
    
    };
    tabla.push(nuevoProducto);

    var cuerpoTabla = document.getElementById("productos-tabla");
    var tablaLlena = "";

    var cuerpoSuma = document.getElementById("suma-productos");
    var tablaSuma = "";
    var total = 0;
    
    for(var i = 0; i < tabla.length; i++){
    
        if( i > 0 ){
            total = total + tabla[i].total;
            tablaLlena += "<tr><td><div class='col'>" + i + "</div></td><td><div class='col-sm-12'>" + tabla[i].producto + "</div></td><td><div class='col'>" + tabla[i].cantidad + "</div></td><td><div class='col'>" + tabla[i].costo + "</div></td><td><div class='col'>" + tabla[i].subtotal + "</div></td><td><div class='col'>" + "<button class='btn btn-danger btn-delete'><i class='far fa-trash-alt'></i></button>" + "</div></td></tr>";
            
            console.log(tabla[i].fecha);
            console.log(tabla[i].factura);
            console.log(tabla[i].proveedor);
            console.log(tabla[i].codigo);
            console.log(tabla[i].producto);
            console.log(tabla[i].categoria);
            console.log(tabla[i].cantidad);
            console.log(tabla[i].stock);
            console.log(tabla[i].costo);
        }
   }
    
    total = addCommas(parseFloat(total)) ;
    tablaSuma = "<tr><th><div class='col'></div></th><th><div class='col-sm-12'></div></th><th><div class='col'></div></th><th><div class='col'>Total Neto</div></th><th><div class='col'>" + total + "</div></th><th><div class='col'></div></th></tr>";

    

    cuerpoTabla.innerHTML = tablaLlena;
    cuerpoSuma.innerHTML = tablaSuma;

    document.getElementById("codigo").value = "";
    document.getElementById("nombre").value = "";
    document.getElementById("categoria").value = "";
    document.getElementById("cantidad").value = "";
    document.getElementById("stock").value = "";
    document.getElementById("costo").value = "";
    document.getElementById("precio_total").value = "";

}

function limpiarFormulario(event){
    event.preventDefault();

    document.getElementById("fecha").value = "";
    document.getElementById("factura").value = "";
    document.getElementById("proveedor").value = "";
    document.getElementById("codigo").value = "";
    document.getElementById("nombre").value = "";
    document.getElementById("categoria").value = "";
    document.getElementById("cantidad").value = "";
    document.getElementById("stock").value = "";
    document.getElementById("costo").value = "";
    document.getElementById("precio_total").value = "";
}

//$(document).on('click', '.btn-delete', function (e) {
//    e.preventDefault();
//    var data = $(this).parents().parents().parents("tr")[0];
//    var dato = tabla[data];
//    console.log(dato);
//});