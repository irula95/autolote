<?php
$servername='localhost';   //dominio o dejar en localhost
$dbusername='root';  //*****cambiar usuario de phpmyadmin*****//
$dbpassword='';  //*****cambiar password de phpmyadmin*****//
$dbname='autolote';  //*****nombre de la base de datos usada*****//


connecttodb($servername,$dbname,$dbusername,$dbpassword);
function connecttodb($servername,$dbname,$dbuser,$dbpassword)
{
global $link;
$link=mysql_connect ("$servername","$dbuser","$dbpassword");
if(!$link){die("No se puede conectar a MySQL");}
mysql_select_db("$dbname",$link) or die ("No se puede abrir base de datos".mysql_error());
}
?>