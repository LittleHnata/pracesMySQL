<?php
include "zahlavi.php";
?>
<strong>Vypis</strong>
<table border="2">
<tr><th>Nadpis inzeratu</th><th>Text inzeratu</th><th>Obrazek</th><th>datum vložení</th><th>Cena</th><th>Typ</th></tr>
<?php
$zprava="";
if (isset($_POST['kategorie'])){
$kategorie=$_POST['kategorie'] ;
}else{
$zprava.="nevybrali jste kategorii";
}
if ($zprava==""){
include "../../mysql_connect.php";
if ($sql=mysql_query("select nadpis_inzeratu,text_inzeratu,obrazek,datum_vlozeni,cena,typ from asw_inzerat where id_kategorie='$kategorie'")){
while ($radek=mysql_fetch_array($sql)){
echo "<tr><td>".$radek['nadpis_inzeratu']."</td><td>".$radek['text_inzeratu']."</td><td><img src='".substr($radek['obrazek'],15)."' width='25%'></td><td>".$radek['datum_vlozeni']."</td><td>".$radek['cena']."</td><td>".$radek['typ']."</td></tr>";
}
}else{
echo mysql_error();
}
}else{
echo $zprava."<br>";
header("Refresh: 5;URL=vypis2.php");  
}

?>
</table>
<?php
include "zapati.php";
?>