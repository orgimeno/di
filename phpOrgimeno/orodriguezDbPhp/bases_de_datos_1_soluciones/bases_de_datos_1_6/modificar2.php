<?php
/**
 * Bases de datos 1-6 - modificar2.php
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
cabecera("Modificar 2", MENU_VOLVER);

$id = recoge("id");

$consulta = "SELECT * FROM $dbTabla
    WHERE id=:id";
$result = $db->prepare($consulta);
$result->execute(array(":id" => $id));
$valor = $result->fetch();
print "<form action=\"modificar3.php\" method=\"" . FORM_METHOD . "\">
  <p>Modifique los campos que desee:</p>
  <table>
    <tbody>
      <tr>
        <td>Nombre:</td>
        <td><input type=\"text\" name=\"nombre\" size=\"$tamNombre\" "
          . "maxlength=\"$tamNombre\" value=\"$valor[nombre]\" /></td>
      </tr>
      <tr>
        <td>Apellidos:</td>
        <td><input type=\"text\" name=\"apellidos\" size=\"$tamApellidos\" "
          . "maxlength=\"$tamApellidos\" value=\"$valor[apellidos]\" /></td>
      </tr>
    </tbody>
  </table>
  <p><input type=\"hidden\" name=\"id\" value=\"$id\" />
    <input type=\"submit\" value=\"Actualizar\" /></p>
</form>\n";

$db = null;
pie();
?>
