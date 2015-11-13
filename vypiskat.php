<?php
include "zahlavi.php";
?>
Vypis
<table border="2">
<tr><th>Nazev</th></tr>
<?php
include "../../mysql_connect.php";
if ($sql=mysql_query("select * from asw_kategorie")){
while ($radek=mysql_fetch_array($sql)){
echo "<tr><td>".$radek['nazev']."</td><td>"."<input type=\"button\" value=\"aktualizace\" onclick=\"document.cookie='id=".$radek['id_kategorie']."';window.location.href='aktualizaceformk.php'\">"."</td><td>"."<input type=\"button\" value=\"smaz\" onclick=\"document.cookie='id=".$radek['id_kategorie']."';window.location.href='smazk.php'\">"."</td></tr>\n";
}
}else{
echo mysql_error();
}
?>
</table>
<?php
include "zapati.php";
?>