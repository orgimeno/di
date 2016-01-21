<?php
/**
 * Bases de datos 1-5 - biblioteca_mysql.php
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

// Constantes
define("MYSQL_HOST", "mysql:host=localhost"); // Nombre de host MYSQL
define("MYSQL_USUARIO", "root");              // Nombre de usuario de MySQL
define("MYSQL_PASSWORD", "");                 // Contrase�a de usuario de MySQL

// Variables globales
$dbDb    = "mclibre_base_datos_1_5";          // Nombre de la base de datos
$dbTabla = $dbDb . ".tabla";                  // Nombre de la tabla

// Consultas
$consultaCreaDb = "CREATE DATABASE $dbDb
    CHARACTER SET latin1 COLLATE latin1_spanish_ci";
    
$consultaCreaTabla = "CREATE TABLE $dbTabla (
    id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
    nombre VARCHAR($tamNombre),
    apellidos VARCHAR($tamApellidos),
    PRIMARY KEY(id)
    )";

// Funciones comunes de bases de datos (MYSQL)

function conectaDb()
{
    try {
        $db = new PDO(MYSQL_HOST, MYSQL_USUARIO, MYSQL_PASSWORD);
        $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
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
    global $dbDb, $consultaCreaDb, $consultaCreaTabla;
    
    $consulta = "DROP DATABASE $dbDb";
    if ($db->query($consulta)) {
        print "<p>Base de datos borrada correctamente.</p>\n";
    } else {
        print "<p>Error al borrar la base de datos.</p>\n";
    }
    $consulta = $consultaCreaDb;
    if ($db->query($consulta)) {
        print "<p>Base de datos creada correctamente.</p>\n";
        $consulta = $consultaCreaTabla;
        if ($db->query($consulta)) {
            print "<p>Tabla creada correctamente.</p>\n";
        } else {
            print "<p>Error al crear la tabla.</p>\n";
        }
    } else {
        print "<p>Error al crear la base de datos.</p>\n";
    }
}

?>