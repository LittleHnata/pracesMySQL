<?php
include "zahlavi.php";
?>
Vypis
<table border="2">
<tr><th>Nadpis inzeratu</th><th>Text inzeratu</th><th>Obrazek</th><th>datum vložení</th><th>Cena</th><th>Typ</th><th>Kategorie</th></tr>
<?php
include "../../mysql_connect.php";
if ($sql=mysql_query("select id_i,nadpis_inzeratu,text_inzeratu,obrazek,datum_vlozeni,cena,typ,nazev from asw_kategorie,asw_inzerat where asw_kategorie.id_kategorie=asw_inzerat.id_kategorie")){
while ($radek=mysql_fetch_array($sql)){
echo "<tr><td>".$radek['nadpis_inzeratu']."</td><td>".$radek['text_inzeratu']."</td><td><img src='".substr($radek['obrazek'],15)."' width='25%'></td><td>".$radek['datum_vlozeni']."</td><td>".$radek['cena']."</td><td>".$radek['typ']."</td><td>".$radek['nazev']."</td><td>"."<input type=\"button\" value=\"aktualizace\" onclick=\"document.cookie='id=".$radek['id_i']."';window.location.href='aktualizaceformi.php'\">"."</td></tr>\n";
}
}else{
echo mysql_error();
}
?>
</table>
<?php
include "zapati.php";
?>