<?php
// Se incluye el archivo .php que establece la conexión a la base de datos
include("./conexion/db_connection.php");

// Acción POST que se ejecuta con el botón de registrar
if (isset($_POST['btn-registro'])) {
    $tipo_id = trim($_POST['tipo_id']);
    $id = trim($_POST['id']);
    $nombre = trim($_POST['nombre']);
    $telefono = trim($_POST['telefono']);
    $email = trim($_POST['email']);
    // Creación de la sentencia SQL para insertar un registro con los valores almacenados
    $insert = "INSERT INTO invitados(tipo_id, id, nombre, telefono, correo) VALUES ('$tipo_id','$id','$nombre','$telefono','$email')";
    // Comando para ejecutar la sentencia anterior en la base de datos conectada
    $resultado = mysqli_query($connection,$insert);
};
?>