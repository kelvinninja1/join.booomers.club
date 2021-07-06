<?php
require_once("../classes/DB.php");
require_once("config.php");


$db = new DB($DBconfig['host'], $DBconfig['dbName'], $DBconfig['username'], $DBconfig['password']);
$data = $db->query("SELECT * FROM `tableName_tb` WHERE 1");
print_r($data);
$count = $db->count("SELECT * FROM `tableName_tb` WHERE 1");
print_r($count);

?>