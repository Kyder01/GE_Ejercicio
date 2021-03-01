# GE_Ejercicio

## Sistema de registro Gear Electric
Sistema encargado de almacenar, filtrar y listar la información de los invitados previamente diligenciada.

#### Lenguaje y Versión
Xampp en versión 8.0.2 para el gestor de base de datos MySQL y despliegue del servidor web Apache.

Apache versión 2.4.46

phpMyAdmin versión 5.0.4

XAMPP Control Panel versión 3.2.4

PHP versión 8.0.2

HTML

JavaScript

#### Motor de base de datos
El motor de base de datos seleccionado es MySQL en su versión 10.4.17-MariaDB.

### Ejecución

-	Cargue de Base de datos
Es necesario tener instalado Xampp en su versión 8.0.2, posterior a la instalación, realizar la búsqueda del panel de control Xampp e iniciar los servicios de apache y MySQL, lo siguiente será iniciar el navegador de preferencia y pegar la siguiente url http://localhost/phpmyadmin para visualizar las opciones que ofrece phpMyadmin.

  Ingrese al proyecto por medio de la url: https://github.com/Kyder01/GE_Ejercicio , encontrará el archivo ‘invitados.sql’ (base de datos), realice la descarga de acuerdo a la información descrita anteriormente, ingrese a phpMyadmin (servicios apache y MySQL deben estar activos) y seleccione en la parte superior izquierda la opción “nueva”, esto con el fin de crear la base de datos (BD) que usara el proyecto, el sistema le solicitara ingresar el nombre, por lo que debe digitar “ge_test “ en minúsculas y sin espacios, en la izquierda seleccione la BD “ge_test”, una vez seleccionada la BD “ge_test” en la parte superior derecha seleccione el ítem “importar” y en “examinar” identifique el archivo .sql y finalmente seleccione “continuar”, con lo cual quedará cargada satisfactoriamente la BD.

-	Ejecutar proyecto

Para ejecutar el proyecto es necesario realizar los siguientes pasos:
1.	Ingrese a https://github.com/Kyder01/GE_Ejercicio y realice la descarga de los archivos del repositorio y guarde los mismos dentro de una nueva carpeta. 
2.	Traslade la información mencionada en el punto anterior en la carpeta ‘htdocs’ contenida en la ruta de instalación Xampp
3.	En el navegador de preferencia ingrese a la url: http://localhost/XXX/index.php, reemplace las ‘XXX’ por el nombre de la carpeta en donde almaceno los archivos descargados del repositorio (Paso 1).

Finalmente visualizará la interfaz donde podrá realizar el registro de la información descrita en el formulario, al diligenciar dichos campos debe seleccionar el botón Registrar.

Adicional en la parte inferior del formulario encontrará un botón llamado “ver listado” que le permitirá consultar los datos previamente registrados y filtrar por nombre o documento la información que desee.

### Solución ejecutada
Para revisar las pruebas realizadas remítase al archivo en github: https://github.com/Kyder01/GE_Ejercicio/blob/master/Evidencia%20ejecucion.docx 



