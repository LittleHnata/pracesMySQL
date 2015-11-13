<?php
include "zahlavi.php";
$id=$_COOKIE['id'];
?>
<form method="post" action="aktualizacformiak.php">
<table>
<?php

include "../../mysql_connect.php";
if ($sql=mysql_query("select id_i,nadpis_inzeratu,text_inzeratu,obrazek,datum_vlozeni,cena,typ,nazev from asw_kategorie,asw_inzerat where asw_kategorie.id_kategorie=asw_inzerat.id_kategorie and id_i='$id'")){
while ($radek=mysql_fetch_array($sql)){
echo "<tr><td>Upravujete inzerát číslo".$radek['id_i']." . </td></tr>";
echo "<tr><td>Nadpis: </td><td><input type='text' value='".$radek['nadpis_inzeratu']."' name='nadpis'></td></tr>" ;
echo "<tr><td>Text: </td><td><input type='textarea' value='".$radek['text_inzeratu']."' name='textarea'></td></tr>" ;
echo "<tr><td>Cena:</td><td><input type='text' value='".$radek['cena']."' name='cena'></td></tr>" ;
echo "<tr><td><input type='submit' value='odeslat' name='odeslat'></td></tr>" ;
}
}else{
echo mysql_error();
}

?>



</table>
</form>
<?php
include "zapati.php";
?>