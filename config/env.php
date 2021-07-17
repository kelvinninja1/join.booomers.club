<?php
    $dev_environment = true; //true //false
    $base_url = ($dev_environment) ? "http://localhost/join.booomers.club" : "";

    // for production
    $productionConfig = [
        'host' => "localhost",
        'dbName' => "join_booomers_db",
        'username' => "ourco_matrix",
        'password' => "@4dm1n123#"
    ];

    // for development
    $developmentConfig = [
        'host' => "localhost",
        'dbName' => "join_booomers_db",
        'username' => "root",
        'password' => ""
    ];

    $DBconfig = ($dev_environment) ? $developmentConfig : $productionConfig;
    $db = new DB($DBconfig['host'], $DBconfig['dbName'], $DBconfig['username'], $DBconfig['password']);
?>