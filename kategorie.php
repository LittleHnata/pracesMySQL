<?php
include "../../mysql_connect.php"   ;
include "zahlavi.php" ;
if(isset($_POST["submit"])){
if (strlen(ltrim($_POST['nazev']))>0){
$nazev= $_POST['nazev'];
$sql="insert into asw_kategorie values ('','$nazev')" ;
if(mysql_query("$sql")){
echo "Kategorie se úspěšně zapsal<br>"   ;
}else{
echo mysql_error();
}
}else{
echo "Nevyplnili jste Název kategorie<br>";
}
}

?>
Kategorie
<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
<table>
<tr><td>Název kategorie</td><td><input type="text" name="nazev"></td></tr>
<tr><td><input type="submit" name="submit" value="odeslat"></td></tr>
</table>
<?php
include "zapati.php";

?>