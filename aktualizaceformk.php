<?php
include "zahlavi.php";
$id=$_COOKIE['id'];
?>
<form method="post" action="aktualizacformkak.php">
<table>
<?php
include "../../mysql_connect.php";
if ($sql=mysql_query("select * from asw_kategorie where id_kategorie='$id'")){
while ($radek=mysql_fetch_array($sql)){
echo "<tr><td>Upravujete kategorii číslo".$radek['id_kategorie']." . </td></tr>";
echo "<tr><td>Nadpis: </td><td><input type='text' value='".$radek['nazev']."' name='nazev'></td></tr>" ;
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