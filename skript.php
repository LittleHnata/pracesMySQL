  <meta charset=utf-8>
<?php

if($_FILES['soubor']['size']>0){
  $cilovy_adresar=$_SERVER['DOCUMENT_ROOT'].
  "/ita12/ita12chladekj/asw/3/img/";
  $cilovy_soubor=$cilovy_adresar.$_FILES['soubor']['name'];
  echo $cilovy_soubor;
  move_uploaded_file($_FILES['soubor']['tmp_name'], $cilovy_soubor);
}else{
  echo "soubor nebyl vybran!" ;
}
$zprava="" ;
if (strlen(ltrim($_POST['nazev']))>0){
$nazev= $_POST['nazev'];
}else{
$zprava.="nevyplnili jste nazev";
}
if (strlen(ltrim($_POST['text']))>0){
$text= $_POST['text'];
}else{
$zprava.="nevyplnili jste text";
}
if (strlen(ltrim($_POST['cena']))>0){
$cena= $_POST['cena'];
}else{
$zprava.="nevyplnili jste cenu";
}
if (strlen(ltrim($_POST['typ']))>0){
$typ= $_POST['typ'];
}else{
$zprava.="nevybrali jste typ";
}
if (strlen(ltrim($_POST['kategorie']))>0){
$kategorie=$_POST['kategorie'] ;
}else{
$zprava.="nevybrali jste kategorii";
}
if ($zprava==""){
include "../../mysql_connect.php"   ;
$sql="insert into asw_inzerat values ('','$nazev','$text','$cilovy_soubor',Now(),'$cena','$typ','$kategorie')" ;
if(mysql_query("$sql")){
echo "Inzerát se úspěšně zapsal"   ;
}else{
echo mysql_error();
}
}else{
echo $zprava."<br>";
header("Refresh: 5;URL=inzerat.php"); 
}



?>