<?php
/**
 * Bases de datos 1-6 - biblioteca_sqlite.php
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

// Constantes

// Variables globales
$dbDb    = "/tmp/mclibre/mclibre_base_datos_1_6.sqlite";  // Nombre de la base de datos
$dbTabla = "tabla";                                       // Nombre de la tabla

// Consultas
$consultaCreaTabla = "CREATE TABLE $dbTabla (
    id INTEGER PRIMARY KEY,
    nombre VARCHAR($tamNombre),
    apellidos VARCHAR($tamApellidos)
    )";

// Funciones comunes de bases de datos (SQLITE)

function conectaDb()
{
    global $dbDb;

    try {
        $db = new PDO("sqlite:" . $dbDb);
        return($db);
    } catch(PDOException $e) {
        cabecera("Error grave", MENU_PRINCIPAL);
        print "<p>Error: No puede conectarse con la base de datos.</p>\n";
        print "<p>Error: " . $e->getMessage() . "</p>\n";
        pie();
        exit();
    }
}

function borraTodo($db)
{
    global $dbTabla, $consultaCreaTabla;

    $consulta = "DROP TABLE $dbTabla";
    if ($db->query($consulta)) {
        print "<p>Tabla borrada correctamente.</p>\n";
    } else {
        print "<p>Error al borrar la tabla.</p>\n";
    }
    $consulta = $consultaCreaTabla;
    if ($db->query($consulta)) {
        print "<p>Tabla creada correctamente.</p>\n";
    } else {
        print "<p>Error al crear la tabla.</p>\n";
    }
}

?>