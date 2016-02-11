<?php 
/**
 * Generador de <select> 2 - generador_select_2.php
 * 
 * @author    Bartolomé Sintes Marco <bartolome.sintes+mclibre@gmail.com>
 * @copyright 2008 Bartolomé Sintes Marco
 * @license   http://www.gnu.org/licenses/agpl.txt AGPL 3 or later
 * @version   2008-02-13
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
  <title>Generador de &lt;select&gt; (Formulario 2). Exámenes. 
  PHP. Bartolomé Sintes Marco</title>
  <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" 
  title="Color" />
</head>
<body>
<h1>Generador de &lt;select&gt; (Formulario 2)</h1>
<?php
function recoge($var)
{ 
    return (isset($_REQUEST[$var])) ? trim(strip_tags($_REQUEST[$var])) : '';
}

$controles       = recoge('controles');
$opciones        = recoge('opciones');
$controlesMaximo = 10;
$opcionesMaximo  = 10;
$controlesOk     = FALSE;
$opcionesOk      = FALSE;

if ($controles=="") {
    print "  <p style=\"color:red\">ERROR: No has escrito el número de controles.</p>\n";
} elseif (!is_numeric($controles)) { 
    print "  <p style=\"color:red\">ERROR: No has escrito el número de controles como número.</p>\n";
} elseif (($controles<1)||($controles>=$controlesMaximo)) {
    print "  <p style=\"color:red\">ERROR: El número de controles debe estar entre 1 y $controlesMaximo.</p>\n";
} elseif (!ereg("^[[:digit:]]+$", $controles)) {
    print "  <p style=\"color:red\">ERROR: El número de controles debe ser entero.</p>\n";
} else {
	$controlesOk = TRUE;
}

if ($opciones=="") {
    print "  <p style=\"color:red\">ERROR: No has escrito el número de opciones.</p>\n";
} elseif (!is_numeric($opciones)) { 
    print "  <p style=\"color:red\">ERROR: No has escrito el número de opciones como número.</p>\n";
} elseif (($opciones<1)||($opciones>=$opcionesMaximo)) {
    print "  <p style=\"color:red\">ERROR: El número de opciones debe estar entre 1 y $opcionesMaximo.</p>\n";
} elseif (!ereg("^[[:digit:]]+$", $opciones)) {
    print "  <p style=\"color:red\">ERROR: El número de opciones debe ser entero.</p>\n";
} else {
    $opcionesOk = TRUE;
}

if ($controlesOk && $opcionesOk) {
    print "\n<form action=\"generador_select_3.php\" method=\"get\">\n".
        "  <p>Escribe las opciones de cada control:</p>\n";
    for ($i=1; $i<=$controles; $i++) {
        print "  <table border=\"1\">\n    <caption>&lt;select&gt; nº $i</caption>\n";
        print "    <tr>\n      <th>Opción</th>\n      <th>Texto</th>\n"
            ."    </tr>\n ";
        for ($j=1; $j<=$opciones; $j++) {
            print "    <tr>\n      <td>$j</td>\n";
            print "      <td><input type=\"text\" name=\"texto[$i][$j]\" size=\"30\" /></td>\n";
            print "    </tr>\n";
        }
        print "  </table>\n";
    }
    print "<p class=\"der\">\n".
       "  <input type=\"hidden\" name=\"controles\" value=\"$controles\" />\n".
       "  <input type=\"hidden\" name=\"opciones\" value=\"$opciones\" />\n".
       "  <input type=\"submit\" value=\"Enviar\" />\n". 
       "  <input type=\"reset\" value=\"Borrar\" name=\"Reset\" /></p>\n</form>\n\n";
}
print "<p><a href=\"generador_select_1.html\">Volver a empezar</a></p>\n";
?>
<address>
  Esta página forma parte del curso "Páginas web con PHP" disponible en <a
  href="http://www.mclibre.org/">http://www.mclibre.org</a><br />
  Autor: Bartolomé Sintes Marco<br />
  Última modificación de esta página: 13 de febrero de 2008 
</address>

<p class="licencia">El programa PHP que genera esta página está bajo 
<a rel="license" href="http://www.gnu.org/licenses/agpl.txt">licencia AGPL 3 o
posterior</a>.</p>
</body>
</html>
