// Funcion para buscar registro por Tipo de Identificación
function funBuscarTI() {
    
    var input, filter, table, tr, td, i, txtValue;
    // Recuperar información del input por medio del ID
    input = document.getElementById("buscarTI");
    // Transforma la cadena recuperada en mayúsculas
    filter = input.value.toUpperCase();
    // Recuperar información de la tabla por medio del ID
    table = document.getElementById("tbRegistro");
    // Asigna los valores recuperados de la fila
    tr = table.getElementsByTagName("tr");

    // Recorre los registros de la tabla y oculta aquellos que no coinciden con la busqueda
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

function funBuscarID() {
    
    var input, filter, table, tr, td, i, txtValue;
    // Recuperar información del input por medio del ID
    input = document.getElementById("buscarID");
    // Transforma la cadena recuperada en mayúsculas
    filter = input.value.toUpperCase();
    // Recuperar información de la tabla por medio del ID
    table = document.getElementById("tbRegistro");
    // Asigna los valores recuperados de la fila
    tr = table.getElementsByTagName("tr");

    // Recorre los registros de la tabla y oculta aquellos que no coinciden con la busqueda
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}