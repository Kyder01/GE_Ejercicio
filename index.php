    <meta charset=UTF-8>
    <title>Registro invitado</title>
    <!-- Enlace hoja de estilos -->
    <link rel="stylesheet" href="./css/estilos.css">
    <!-- Enlace validaciones del formulario en JavaScript -->
    <script src="./js/validaciones.js" type="text/javascript"></script>

    <body>
        <section class="ventanaFondo">
            <!-- Sección logo y eslogan -->
            <section class="infoEmpresaB">
                <section class="infoEmpresaF">
                    <center>
                        <img src="./images/LogoGearElectric.png">
                        <h3>Soluciones ideales para un entorno inteligente</h3>
                    </center>
                </section>
            </section>
            <!-- Formulario de registro -->
            <form class="formRegistro" method="post" onsubmit="return validarForma(this);">
                <h2>Registro de datos</h2>
                <div class="infoInvitado">
                    <label>Tipo de identificación *</label>
                    <select name="tipo_id">
                        <!-- Menú desplegable para elegir tipo de indentificación -->
                        <option value="">--Seleccione--</option>
                        <option value="Tarjeta de identidad">Tarjeta de identidad</option>
                        <option value="Cédula de ciudadanía">Cédula de ciudadanía</option>
                        <option value="Cédula de extranjería">Cédula de extranjería</option>
                        <option value="Pasaporte">Pasaporte</option>
                    </select>
                    <label>Número de documento *</label>
                    <input type="text" name="id" onkeypress="return vaLength(this, 20);">

                    <label>Nombre completo *</label>
                    <input type="text" name="nombre" onkeypress="return vaLength(this, 100);">

                    <label>Teléfono *</label>
                    <input type="tel" name="telefono" onkeypress="return vaLength(this, 10);">

                    <label>Correo electrónico *</label>
                    <input type="text" name="email" placeholder="correo@ejemplo.com">
                    <!-- Apartado para registrar un invitado y/o visualizar la lista de invitados-->
                    <div class="div" id="div-buttons">
                        <input type="submit" name="btn-registro" value="Registrar">
                        <a id="listarInv" type="button" href="./acciones/listarInvitados.php">Ver listado</a>
                    </div>
                </div>
            </form>
        </section>
        <!-- Se incluye el archivo .php que contiene el código de inserción de datos del formulario a la base de datos  -->
        <?php
        include("./acciones/register.php");
        ?>
    </body>