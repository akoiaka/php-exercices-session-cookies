<?php
$cookieFin = time()+60*60*24;
setcookie("login", "charlie", $cookieFin);
echo $_COOKIE["login"];

?>