<?php
/**
 * Bases de datos 1-1 - biblioteca.php
 *
 * @author    Bartolom� Sintes Marco <bartolome.sintes+mclibre@gmail.com>
 * @copyright 2014 Bartolom� Sintes Marco
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

define("FORM_METHOD",    "get");           // Formularios se env�an con GET
//define("FORM_METHOD",    "post");        // Formularios se env�an con POST

define("MYSQL",          "MySQL");         // Base de datos MySQL 
define("SQLITE",         "SQLite");        // Base de datos SQLITE

define("MENU_PRINCIPAL", "menuPrincipal"); // Men� principal
define("MENU_VOLVER",    "menuVolver");    // Men� Volver a inicio

$tamNombre    = 40;                        // Tama�o del campo Nombre
$tamApellidos = 60;                        // Tama�o del campo Apellidos

$dbMotor = MYSQL;                         // Base de datos empleada (MYSQL o SQLITE)

if ($dbMotor == MYSQL) {
    require_once "biblioteca_mysql.php";
} elseif ($dbMotor == SQLITE) {
    require_once "biblioteca_sqlite.php";
}

// Funciones comunes

function cabecera($texto, $menu)
{
    print "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?>
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"
       \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\" />
  <title>www.mclibre.org - Bases de datos 1-1 - $texto</title>
  <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==\" crossorigin=\"anonymous\">
</head>

<body>
<h1>Bases de datos 1-1 - $texto</h1>

<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">";
    if ($menu == MENU_PRINCIPAL) {
        print "    <li><a href=\"borrartodo1.php\">Borrar todo</a></li>\n";
    } elseif ($menu == MENU_VOLVER) {
        print "    <li><a href=\"index.php\">P�gina inicial</a></li>\n";
    } else {
        print "    <li>Error en la selecci�n de men�</li>\n";
    }
print           "</ul>
            </div>
<div id=\"contenido\">\n";
}

function pie()
{
    print '</div>

<div id="pie">
<p class="ultmod">�ltima modificaci�n de esta p�gina: 8 de diciembre de 2014</p>

<p class="licencia">
Este programa forma parte del curso <strong><span xmlns:dct="http://purl.org/dc/terms/" 
xmlns:property="dct:title">P�ginas web con PHP</span></strong> por
<a xmlns:cc="http://creativecommons.org/ns#" href="http://www.mclibre.org/"
rel="cc:attributionURL">Bartolom� Sintes Marco</a>.<br />
El programa PHP que genera esta p�gina est� bajo
<a rel="license" href="http://www.gnu.org/licenses/agpl.txt">licencia AGPL 3 o
posterior</a></p>
</div>
</body>
</html>';
}

?>