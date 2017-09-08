<?php
header("Content-Type: text/html;charset=utf-8");
$db = new mysqli('localhost', 'root', '', 'biblioteca');
$acentos = $db->query ("SET NAMES 'utf8'");


if($db->connect_error > 0) 

{ die('error de conexion ['  . $db->connect_error . ']');
}




?>