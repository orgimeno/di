<?php
/**
 * Bases de datos 1-6 - modificar1.php
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

require_once "biblioteca.php";

$db = conectaDb();
cabecera("Modificar 1", MENU_VOLVER);

$consulta = "SELECT * FROM $dbTabla";
$result = $db->query($consulta);
print "<form action=\"modificar2.php\" method=\"" . FORM_METHOD . "\">
  <p>Indique el registro que quiera modificar:</p>
  <table border=\"1\">
    <thead>
      <tr class=\"neg\">
        <th>Modificar</th>
        <th>Nombre</th>
        <th>Apellidos </th>
      </tr>
    </thead>
    <tbody>\n";
foreach ($result as $valor) {
    print "      <tr>
        <td align=\"center\"><input type=\"radio\" "
    . "name=\"id\" value=\"$valor[id]\" /></td>
        <td>$valor[nombre]</td>
        <td>$valor[apellidos]</td>
      </tr>\n";
}

print "    </tbody>\n  </table>
  <p><input type=\"submit\" value=\"Modificar\" /></p>
</form>\n";

$db = null;
pie();
?>
