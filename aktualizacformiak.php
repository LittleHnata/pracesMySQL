<?php 
include ("zahlavi.php"); 
include ("../../mysql_connect.php");
$id=$_COOKIE['id'];
$nadpis=$_POST['nadpis'];
$textarea=$_POST['textarea'];
$cena=$_POST['cena'];
if (mysql_query("UPDATE asw_inzerat SET nadpis_inzeratu='$nadpis', text_inzeratu='$textarea', cena='$cena' WHERE id_i='$id'")) {
echo "inzerat byl uspěšně aktualizován";
}else{
echo mysql_error();
}
include ("zapati.php"); ?>