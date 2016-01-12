
<?php
require_once("biblioteca.php");

//print "<p class=\"aviso\">Ejercicio incompleto</p>\n";

cabecera("hola", "adios");
?>
<form action="borrartodo2.php">
	<label>¿Esta seguro?</label>
	<input type="submit" value="SI" name="si">
	<input type="submit" value="NO" name="no">
</form>
<?php
	pie();
?>
