
<?php
require_once("biblioteca.php");

//print "<p class=\"aviso\">Ejercicio incompleto</p>\n";
if (isset($_GET['no'])) {
	header('Location: http://localhost:8080/bases_de_datos_1_plantillas/bases_de_datos_1_1/index.php');
}
cabecera("hola", "adios");
$db=conectaDb();
borraTodo($db);
pie();