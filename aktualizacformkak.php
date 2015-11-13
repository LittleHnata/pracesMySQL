<?php 
include ("zahlavi.php"); 
include ("../../mysql_connect.php");
$id=$_COOKIE['id'];
$nazev=$_POST['nazev'];
if (mysql_query("UPDATE asw_kategorie SET  nazev='$nazev' WHERE id_kategorie='$id'")) {
echo "kategorie byla uspěšně aktualizována";
}else{
echo mysql_error();
}
include ("zapati.php"); ?>