<?php
error_reporting(0);

// Incluir la clase de base de datos
include_once("../classes/class.Database.php");

// Retorna un json
header('Content-Type: application/json');

$sql = "SELECT * FROM caso ORDER BY Id ASC";

echo Database::get_json_rows($sql);
?>