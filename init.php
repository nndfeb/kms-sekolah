<?php
spl_autoload_register(function ($class) {
    require_once 'class/' . $class . '.php';
});

$login = new Login();
$database = new Database();
$pages = new Pages();
$admin = new Admin();