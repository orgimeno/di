<?php 
/**
 * Generador de formularios 3 - generador_formularios_3.php
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
  <title>Generador de formularios (Formulario 3). Exámenes. 
  PHP. Bartolomé Sintes Marco</title>
  <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" 
  title="Color" />
</head>
<body>
<h1>Generador de formularios (Formulario 3)</h1>
<?php
function recoge($var)
{ 
    return (isset($_REQUEST[$var])) ? trim(strip_tags($_REQUEST[$var])) : '';
}

function recogeMatriz($var, $i)
{ 
    return (isset($_REQUEST[$var][$i])) ? trim(strip_tags($_REQUEST[$var][$i])) : '';
}

/*
print "<pre>";
print_r($_REQUEST);
print "</pre>";
*/
$numero = recoge('numero');

if ($numero=="") {
    print "  <p style=\"color:red\">ERROR: No has escrito el número de controles.</p>\n";
} elseif (!is_numeric($numero)) { 
    print "  <p style=\"color:red\">ERROR: No has escrito el número de controles como número.</p>\n";
} elseif ($numero==0) {
    print "  <p style=\"color:red\">ERROR: El número de controles no puede ser cero.</p>\n";
} elseif (!ereg("^[[:digit:]]+$", $numero)) {
    print "  <p style=\"color:red\">ERROR: El número de controles debe ser entero.</p>\n";
} else {
    if ((!isset($_REQUEST['texto'])) || (!isset($_REQUEST['tipo']))) {
        print "  <p style=\"color:red\">ERROR: No se han rellenado todos los campos.</p>\n";
        print "<p><a href=\"generador_formularios_2.php?numero=$numero\">Volver a la página anterior</a></p>\n";
    } elseif ((count($_REQUEST['texto'])!=$numero) || (count($_REQUEST['tipo'])!=$numero)) {
        print "  <p style=\"color:red\">ERROR: No se han rellenado todos los campos.</p>\n";
        print "<p><a href=\"generador_formularios_2.php?numero=$numero\">Volver a la página anterior</a></p>\n";
    } else {
    	$texto = array();
        $todo_ok = 1;
    	for ($i=1; $i<=$numero; $i++) {
    		$texto[$i] = recogeMatriz("texto",$i);
            $tipo[$i]  = recogeMatriz("tipo",$i);
            if (($texto[$i]=="") || (($tipo[$i]!="texto")&&($tipo[$i]!="casilla"))) {
                $todo_ok = 0;
            }
    	}
    	if ($todo_ok==0) {
            print "  <p style=\"color:red\">ERROR: No se han rellenado todos los campos.</p>\n";
            print "<p><a href=\"generador_formularios_2.php?numero=$numero\">Volver a la página anterior</a></p>\n";
    	} else {
            print "\n<form action=\"generador_formularios_4.php\" method=\"get\">\n".
                  "<p>Rellena este formulario:</p>\n";
            print "<table border=\"1\">\n";
    	
            for ($i=1; $i<=$numero; $i++) {
	        	print "  <tr>\n    <td>$texto[$i]: </td>\n";
	        	if ($tipo[$i]=="texto") {
	        		print "    <td><input type=\"text\" name=\"campo[$i]\" /></td>\n";
	            } elseif ($tipo[$i]=="casilla") {
	                print "    <td><input type=\"checkbox\" name=\"campo[$i]\" /></td>\n";
	        	}
	        	print "  </tr>\n";
            }
            print "</table>\n";
	        print "<p class=\"der\">\n".
	              "  <input type=\"submit\" value=\"Enviar\" />\n". 
	              "  <input type=\"reset\" value=\"Borrar\" name=\"Reset\" /></p>\n</form>\n\n";
	    }
    }
}
print "<p><a href=\"generador_formularios_1.html\">Volver a empezar</a></p>\n";
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
