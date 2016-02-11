<?php 
/**
 * Generador de <select> 3 - generador_select_3.php
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
  <title>Generador de &lt;select&gt; (Formulario 3). Exámenes. 
  PHP. Bartolomé Sintes Marco</title>
  <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" 
  title="Color" />
</head>
<body>
<h1>Generador de &lt;select&gt; (Resultado)</h1>
<?php
function recoge($var)
{ 
    return (isset($_REQUEST[$var])) ? trim(strip_tags($_REQUEST[$var])) : '';
}

function recogeMatriz($var)
{ 
    $resul = array();
    if (isset($_REQUEST[$var]) && is_array($_REQUEST[$var])) {
        foreach ($_REQUEST[$var] as $indice => $valor) {
        	if (is_array($valor)) {
        		foreach ($valor as $indice2 => $valor2) {
                    $resul[trim(strip_tags($indice))][trim(strip_tags($indice2))] = trim(strip_tags($valor2));
        		}
            }
        }
    }
    return $resul;
}

$controles       = recoge('controles');
$opciones        = recoge('opciones');
$texto           = recogeMatriz('texto');
$controlesMaximo = 10;
$opcionesMaximo  = 10;
$controlesOk     = FALSE;
$opcionesOk      = FALSE;
$textoOk         = FALSE;

if ($controles=="") {
    print "<p style=\"color:red\">ERROR: No has escrito el número de controles.</p>\n";
} elseif (!is_numeric($controles)) { 
    print "<p style=\"color:red\">ERROR: No has escrito el número de controles como número.</p>\n";
} elseif (($controles<1)||($controles>=$controlesMaximo)) {
    print "<p style=\"color:red\">ERROR: El número de controles debe estar entre 1 y $controlesMaximo.</p>\n";
} elseif (!ereg("^[[:digit:]]+$", $controles)) {
    print "<p style=\"color:red\">ERROR: El número de controles debe ser entero.</p>\n";
} else {
    $controlesOk = TRUE;
}

if ($opciones=="") {
    print "<p style=\"color:red\">ERROR: No has escrito el número de opciones.</p>\n";
} elseif (!is_numeric($opciones)) { 
    print "<p style=\"color:red\">ERROR: No has escrito el número de opciones como número.</p>\n";
} elseif (($opciones<1)||($opciones>=$opcionesMaximo)) {
    print "<p style=\"color:red\">ERROR: El número de opciones debe estar entre 1 y $opcionesMaximo.</p>\n";
} elseif (!ereg("^[[:digit:]]+$", $opciones)) {
    print "<p style=\"color:red\">ERROR: El número de opciones debe ser entero.</p>\n";
} else {
    $opcionesOk = TRUE;
}

$textoOk = TRUE;
$textoTotal = 0;
foreach ($texto as $valor) {
	$textoTotal += count($valor);
}

if ($textoTotal!=$controles*$opciones) {
    print "<p style=\"color:red\">ERROR: No se han recibido todos los campos.</p>\n";
    $textoOk = FALSE;
} else {
	$textoOk = TRUE;
	for ($i=1; $i<=$controles; $i++) {
		for ($j=1; $j<=$opciones; $j++) {
            if (!isset($texto[$i][$j]) || ($texto[$i][$j]=="")) { 
                print "  <p style=\"color:red\">ERROR: Opción sin rellenar.</p>\n";
                $textoOk = FALSE;
            }
        }
    }
}

if (!$controlesOk || !$opcionesOk || !$textoOk) {
    print "<p><a href=\"generador_select_2.php?controles=$controles&amp;opciones=$opciones\">Volver a la página anterior</a></p>\n";
} else {
	print "<p>Controles generados:</p>\n";
    print "<table border=\"1\">\n";
    print "  <tr>\n    <th>Número</th>\n    <th>Control &lt;select&gt;</th>\n"
            ."  </tr>\n ";
    for ($i=1; $i<=$controles; $i++) {
        print "  <tr>\n    <td>$i</td>\n";
        print "    <td><select>\n";
        for ($j=1; $j<=$opciones; $j++) {
        	print "      <option>".$texto[$i][$j]."</option>\n";
        }
        print "      </select></td>\n  </tr>\n";
     }
     print "</table>\n";
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
