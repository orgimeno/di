<?php
/**
 * Bases de datos 1-2 - insertar1.php
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

cabecera("Añadir 1", MENU_VOLVER);

print "<form action=\"insertar2.php\" method=\"" . FORM_METHOD . "\">
  <p>Escriba los datos del nuevo registro:</p>
  <table>
    <tbody>
      <tr>
        <td>Nombre:</td>
        <td><input type=\"text\" name=\"nombre\" size=\"$tamNombre\" "
        . "maxlength=\"$tamNombre\" /></td>
      </tr>
      <tr>
        <td>Apellidos:</td>
        <td><input type=\"text\" name=\"apellidos\" size=\"$tamApellidos\" "
        . "maxlength=\"$tamApellidos\" /></td>
      </tr>
    </tbody>
  </table>
  <p><input type=\"submit\" value=\"Añadir\" /></p>
</form>\n";

pie();
?>
