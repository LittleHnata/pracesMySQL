<?php
include "zahlavi.php";
?>
Vypis podle kategorie
<form action="skriptkvypisu2.php" method="post">
<table>
<tr><td>Výběr kategorie</td><td><select name="kategorie" id="kategorie"><?php  include '../../mysql_connect.php'; if($mezi=mysql_query('select * from asw_kategorie')){while($kategorie=mysql_fetch_array($mezi)){echo "<option value=".$kategorie['id_kategorie'].">".$kategorie['nazev']."</option>";}}   ?></select></td></tr>
<tr><td><input type="submit" name="submit" value="odeslat"></td></tr>
</table>
</form>
<?php
include "zapati.php";
?>