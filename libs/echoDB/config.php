<?php
$dev_environment = true; //true //false

// for production
$productionConfig = [
    'host' => "localhost",
    'dbName' => "productionName_db",
    'username' => "username",
    'password' => "password"
];

// for development
$developmentConfig = [
    'host' => "localhost",
    'dbName' => "devName_db",
    'username' => "root",
    'password' => ""
];

$DBconfig = ($dev_environment) ? $developmentConfig : $productionConfig;



 ?>