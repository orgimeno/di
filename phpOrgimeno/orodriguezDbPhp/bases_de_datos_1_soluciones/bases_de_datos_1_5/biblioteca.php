<?php
/**
 * Bases de datos 1-5 - biblioteca.php
 *
 * @author    Bartolomé Sintes Marco <bartolome.sintes+mclibre@gmail.com>
 * @copyright 2014 Bartolomé Sintes Marco
 * @license   http://www.gnu.org/licenses/agpl.txt AGPL 3 or later
 * @version   2014-12-08
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

// Constantes y variables globales

define("FORM_METHOD",    "get");           // Formularios se envían con GET
//define("FORM_METHOD",    "post");        // Formularios se envían con POST

define("MYSQL",          "MySQL");         // Base de datos MySQL 
define("SQLITE",         "SQLite");        // Base de datos SQLITE

define("MENU_PRINCIPAL", "menuPrincipal"); // Menú principal
define("MENU_VOLVER",    "menuVolver");    // Menú Volver a inicio

$tamNombre    = 40;                        // Tamaño del campo Nombre
$tamApellidos = 60;                        // Tamaño del campo Apellidos

$dbMotor = SQLITE;                         // Base de datos empleada (MYSQL o SQLITE)

if ($dbMotor == MYSQL) {
    require_once "biblioteca_mysql.php";
} elseif ($dbMotor == SQLITE) {
    require_once "biblioteca_sqlite.php";
}

// Funciones comunes

function recoge($var, $var2="")
{
    $tmp = (isset($_REQUEST[$var]) && trim(strip_tags($_REQUEST[$var])) != "")
        ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "ISO-8859-1"))
        : strip_tags(trim(htmlspecialchars($var2, ENT_QUOTES, "ISO-8859-1")));
    return $tmp;
}

function recogeMatriz($var)
{
    $tmpMatriz = array();
    if (isset($_REQUEST[$var]) && is_array($_REQUEST[$var])) {
        foreach ($_REQUEST[$var] as $indice => $valor) {
            $indiceLimpio = trim(htmlspecialchars($indice, ENT_QUOTES, "ISO-8859-1"));
            $valorLimpio  = trim(htmlspecialchars($valor,  ENT_QUOTES, "ISO-8859-1"));
            $tmpMatriz[$indiceLimpio] = $valorLimpio;
        }
    }
    return $tmpMatriz;
}

function cabecera($texto, $menu)
{
    print "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?>
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"
       \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\" />
  <title>www.mclibre.org - Bases de datos 1-5 - $texto</title>
  <link href=\"mclibre_php_soluciones_proyectos_comun.css\" rel=\"stylesheet\" type=\"text/css\" />
</head>

<body>
<h1>Bases de datos 1-5 - $texto</h1>
<div id=\"menu\">
  <ul>\n";
    if ($menu == MENU_PRINCIPAL) {
           print "    <li><a href=\"insertar1.php\">Añadir registro</a></li>
    <li><a href=\"listar.php\">Listar</a></li>
    <li><a href=\"borrar1.php\">Borrar</a></li>
    <li><a href=\"buscar1.php\">Buscar</a></li>
    <li><a href=\"borrartodo1.php\">Borrar todo</a></li>\n";
    } elseif ($menu == MENU_VOLVER) {
        print "    <li><a href=\"index.php\">Página inicial</a></li>\n";
    } else {
        print "    <li>Error en la selección de menú</li>\n";
    }
    print "  </ul>
</div>

<div id=\"contenido\">\n";
}

function pie()
{
    print '</div>

<div id="pie">
<p class="ultmod">Última modificación de esta página: 8 de diciembre de 2014</p>

<p class="licencia">
Este programa forma parte del curso <strong><span xmlns:dct="http://purl.org/dc/terms/" 
xmlns:property="dct:title">Páginas web con PHP</span></strong> por
<a xmlns:cc="http://creativecommons.org/ns#" href="http://www.mclibre.org/"
rel="cc:attributionURL">Bartolomé Sintes Marco</a>.<br />
El programa PHP que genera esta página está bajo
<a rel="license" href="http://www.gnu.org/licenses/agpl.txt">licencia AGPL 3 o
posterior</a></p>
</div>
</body>
</html>';
}

?>