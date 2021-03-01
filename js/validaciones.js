// Funcion para validar los elementos requeridos del formulario
function validarForma(forma) {

    // Validacion Tipo Documento
    var tipoDocumento = forma.tipo_id.value;
    if (tipoDocumento == "") {
        alert("Debe seleccionar tipo de identificación");
        return false;
    }

    // Validacion Documento
    var documento = forma.id.value;
    if (documento == "") {
        alert("El campo \'identificación\' no puede estar vacío");
        return false;
    }

    // Validacion Nombre  
    var nombreInvitado = forma.nombre.value
    if (nombreInvitado == "") {
        alert('El campo \'nombre\' no puede estar vacío')
        return false;
    } else {
        if (/^([A-z][A-zñáéíóú]+[\s]*)+$/.test(nombreInvitado) == false) {
            alert('El nombre ingresado no es válido, por favor verifique la información');
            return false;
        }
    }

    // Validacion Telefono
    var telefonoInvitado = forma.telefono.value
    if (telefonoInvitado == "") {
        alert('El campo \'teléfono\' no puede estar vacío')
        return false;
    } else {
        if (/^[0-9][0-9]*$/.test(telefonoInvitado) == false) {
            alert('El teléfono debe ser un valor numérico');
            return false;
        }
    }
    // Validacion correo electronico
    var correoInvitado = forma.email.value;
    var expr = /^\w+([\.-]?\w+)*@\w+(\.\w{2,3,4})+$/;
    if (correoInvitado == "") {
        alert('El campo \'Correo Electrónico\' no puede estar vacío')
        return false;
    } else {
        if (/^[^@\s]+@[^@\s]+\.[^@\s]+$/.test(correoInvitado) == false) {
            alert('Correo electrónico no válido');
            return false;
        }
    }

    // Alerta que indica que todos los campos fueron ingresados correctamente
    alert("Formulario válido, enviando datos...");
    return true;
}

// Funcion para validar la cantidad maxima de caracteres permitidos en un campo
function vaLength(valor, longitudMaxima) {
    try {
        if (valor.value.length > (longitudMaxima - 1))
            return false;
        else
            return true;
    } catch (e) {
        return false;
    }
}






