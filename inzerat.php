<?php
include "zahlavi.php";

?>
<body>
Inzeraty
<form action="skript.php" method="post" enctype='multipart/form-data'>
<table>
<tr><td>Název inzeratu</td><td><input type="text" name="nazev" size="30" maxlenght="30"></td></tr>
<tr><td>Text Inzeratu</td><td><input type="text" name="text" maxlenght="300"></td></tr>
<tr><td>Obrazek</td><td> <input type="file" name="soubor">   </td></tr>
<tr><td>cena</td><td><input type="text" name="cena" size="30" maxlenght="30"></td></tr>
<tr><td>typ</td><td><select name="typ"><option>nabídka</option><option>poptávka</option></select></td></tr>
<tr><td>Kategorie</td><td><select name="kategorie"><?php  include '../../mysql_connect.php'; if($mezi=mysql_query('select * from asw_kategorie')){while($kategorie=mysql_fetch_array($mezi)){echo "<option value=".$kategorie['id_kategorie'].">".$kategorie['nazev']."</option>";}}   ?></select></td></tr>
<tr><td><input type="submit" name="submit" value="odeslat"></td></tr>
</table>
<?php




include "zapati.php";
?>