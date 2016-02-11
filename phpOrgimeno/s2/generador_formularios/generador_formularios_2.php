<?php 
/**
 * Generador de formularios 2 - generador_formularios_2.php
 * 
 * @author    Bartolomé Sintes Marco <bartolome.sintes+mclibre@gmail.com>
 * @copyright 2008 Bartolomé Sintes Marco
 * @license   http://www.gnu.org/licenses/agpl.txt AGPL 3 or later
 * @version   2008-01-23
 * @link      http://www.mclibre.org
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Affero General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Affero General Public License for more details.
 *
 *  You should have received a copy of the GNU Affero General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

print "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?".">\n"; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Generador de formularios (Formulario 2). Exámenes. 
  PHP. Bartolomé Sintes Marco</title>
  <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" 
  title="Color" />
</head>
<body>
<h1>Generador de formularios (Formulario 2)</h1>
<?php
function recoge($var)
{ 
    return (isset($_REQUEST[$var])) ? trim(strip_tags($_REQUEST[$var])) : '';
}

$controlesMaximo = 20;
$numero = recoge('numero');

if ($numero=="") {
    print "  <p style=\"color:red\">ERROR: No has escrito el número de controles.</p>\n";
} elseif (!is_numeric($numero)) { 
    print "  <p style=\"color:red\">ERROR: No has escrito el número de controles como número.</p>\n";
} elseif (($numero<1)||($numero>=$controlesMaximo)) {
    print "  <p style=\"color:red\">ERROR: El número de controles debe estar entre 1 y $controlesMaximo.</p>\n";
} elseif (!ereg("^[[:digit:]]+$", $numero)) {
    print "  <p style=\"color:red\">ERROR: El número de controles debe ser entero.</p>\n";
} else {
	print "<form action=\"generador_formularios_3.php\" method=\"get\">\n".
	      "<p>Define los controles a mostrar en el formulario (es necesario\n".
	      "rellenar todo los campos):</p>\n";
	print "<table border=\"1\">\n";
	for ($i=1; $i<=$numero; $i++) {
		print "  <tr>\n    <td rowspan=\"2\">$i</td>".
		      "    <td>Texto:</td>\n".
		      "    <td><input type=\"text\" size=\"30\" name=\"texto[$i]\" /></td>\n".
		      "  </tr>\n  <tr>\n".
		      "    <td>Tipo de control:</td>\n".
		      "    <td><input type=\"radio\" name=\"tipo[$i]\" value=\"texto\" />Texto<br />\n".
              "      <input type=\"radio\" name=\"tipo[$i]\" value=\"casilla\" />Casilla de verfificación".
		"</td>\n  </tr>\n";		     
	}
	print "</table>\n";
	print "<p class=\"der\">
  <input type=\"hidden\" name=\"numero\" value=\"$numero\" />
  <input type=\"submit\" value=\"Enviar\" /> 
  <input type=\"reset\" value=\"Borrar\" name=\"Reset\" /></p>\n</form>\n";
}
print "  <p><a href=\"generador_formularios_1.html\">Volver a empezar</a></p>\n";
?>
<address>
  Esta página forma parte del curso "Páginas web con PHP" disponible en <a
  href="http://www.mclibre.org/">http://www.mclibre.org</a><br />
  Autor: Bartolomé Sintes Marco<br />
  Última modificación de esta página: 23 de enero de 2008 
</address>

<p class="licencia">El programa PHP que genera esta página está bajo 
<a rel="license" href="http://www.gnu.org/licenses/agpl.txt">licencia AGPL 3 o
posterior</a>.</p>
</body>
</html>
