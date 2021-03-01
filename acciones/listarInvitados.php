    <!-- Conexion a la base de datos y creación de sentencia SQL para extraer la información -->
    <?php
        include("../conexion/db_connection.php");
        $sql = "select * from invitados";
        $resultado = mysqli_query($connection, $sql);
    ?>
    <!-- Enlace hoja de estilos -->
    <link rel="stylesheet" href="../css/estilos.css">
    <!-- Enlace funciones de busqueda en JavaScript -->
    <script src="../js/funciones.js" type="text/javascript"></script>

    <section class="ventanaFondo">
        <div class="scroll">
            <table id="tbRegistro">
                <caption><a class="BtnBack" type="button" href="../index.php">←</a>
                Listado de invitados
            </caption>
                <caption>
                    <p>Búsqueda por tipo de identificación: <input type="text" id="buscarTI" class="buscarCaja" onkeyup="funBuscarTI()" placeholder="Buscar..."></p>
                    <p>Búsqueda por número de identificación: <input type="text" id="buscarID" class="buscarCaja" onkeyup="funBuscarID()" placeholder="Buscar..."></p>
                </caption>

                <thead>
                    <tr>
                        <th>Tipo de identificación</th>
                        <th>Número de identificación</th>
                        <th>Nombre</th>
                        <th>Teléfono</th>
                        <th>Correo electrónico</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Recupera e imprime los datos obtenidos de ejecutar la sentencia sql de busqueda -->
                    <?php
                        foreach ($resultado as $reg){ 
                    ?>
                    <tr>
                        <td><?php echo $reg['tipo_id']?></td>
                        <td><?php echo $reg['id'] ?></td>
                        <td><?php echo $reg['nombre'] ?></td>
                        <td><?php echo $reg['telefono'] ?></td>
                        <td><?php echo $reg['correo'] ?></td>
                    </tr>
                    <?php }; ?>
                </tbody>
            </table>
        </div>
    </section>
