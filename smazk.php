<?php 
include ("zahlavi.php"); 
include ("../../mysql_connect.php");
$id=$_COOKIE['id'];
if (mysql_query("delete from asw_kategorie where id_kategorie='$id' limit 1")) {
echo "kategorie byla uspěšně smazana";
}else{
echo mysql_error();
}
include ("zapati.php"); 
?>