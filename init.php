<?php

spl_autoload_register(function($class) {
    require $class.'.php';
});

define("DB_HOST", "db");
define("DB_NAME", "DockerDB");
define("DB_USER", "root");
define("DB_PASS", "pa55word");
define("BASE_URL", "http://localhost:8080/");

$validate = new Validate;
$userObj = new User;
