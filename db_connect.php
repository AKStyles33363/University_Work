<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbdatabase = "shop";

$link=mysqli_connect($dbhost,$dbuser,$dbpass);

mysqli_select_db($link, $dbdatabase) or die("нет соединения с БД". mysqli_error());
mysqli_query("SET names cp1251");//UTF-8
?>

