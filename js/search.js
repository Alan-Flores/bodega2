document.getElementById("codigo").onchange = function(){alerta()};
function alerta() {
    // Creando el objeto para hacer el request
    var request = new XMLHttpRequest();
    request.responseType = 'json';

    // Objeto PHP que consultaremos
    request.open("POST", "app/add_delete/search.php");

    // Definiendo el listener
    request.onreadystatechange = function() {
        // Revision si fue completada la peticion y si fue exitosa
        if(this.readyState === 4 && this.status === 200) {
            // Ingresando la respuesta obtenida 
            document.getElementById("nombre").value = this.response.name;
            document.getElementById("categoria").value = this.response.family;
            document.getElementById("stock").value = this.response.stock;
        }
    };

    // Recogiendo la data del HTML
    var myForm = document.getElementById("myForm");
    var formData = new FormData(myForm);

    // Enviando la data al PHP
    request.send(formData);
}