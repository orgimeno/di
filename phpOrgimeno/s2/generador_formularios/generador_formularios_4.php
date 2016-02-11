<?php 
/**
 * Generador de formularios 4 - generador_formularios_4.php
 * 
 * @author    Bartolom� Sintes Marco <bartolome.sintes+mclibre@gmail.com>
 * @copyright 2008 Bartolom� Sintes Marco
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
  <title>Generador de formularios (Formulario 3). Ex�menes. 
  PHP. Bartolom� Sintes Marco</title>
  <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" 
  title="Color" />
</head>
<body>
<h1>Generador de formularios (Resultado)</h1>
<?php
function recoge($var)
{ 
    return (isset($_REQUEST[$var])) ? trim(strip_tags($_REQUEST[$var])) : '';
}

function limpia($var)
{ 
    return trim(strip_tags($var));
}

function recogeMatriz($var, $i)
{ 
    return (isset($_REQUEST[$var][$i])) ? trim(strip_tags($_REQUEST[$var][$i])) : '';
}

if (!isset($_REQUEST['campo'])) {
    print "  <p>No se ha enviado ning�n dato.</p>\n";
} else {
	print "<p>Los valores recibidos son los siguientes:</p>\n";
    foreach ($_REQUEST['campo'] as $indi => $val) {
    	$indice = limpia($indi);
        $valor  = limpia($val);
        if ($valor=="") {
            print "<p>El campo <strong>$indice</strong> del formulario est� vac�o</p>\n";
        } else {
            print "<p>El campo <strong>$indice</strong> del formulario vale <strong>$valor</strong></p>\n";
        }
    }
}
print "<p><a href=\"generador_formularios_1.html\">Volver a empezar</a></p>\n";
?>
<address>
  Esta p�gina forma parte del curso "P�ginas web con PHP" disponible en <a
  href="http://www.mclibre.org/">http://www.mclibre.org</a><br />
  Autor: Bartolom� Sintes Marco<br />
  �ltima modificaci�n de esta p�gina: 23 de enero de 2008 
</address>

<p class="licencia">El programa PHP que genera esta p�gina est� bajo 
<a rel="license" href="http://www.gnu.org/licenses/agpl.txt">licencia AGPL 3 o
posterior</a>.</p>
</body>
</html>
