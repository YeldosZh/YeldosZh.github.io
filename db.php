<?php

$host = '127.0.0.1';
$db   = 'cg_36_rests';
$user = 'admin';
$pass = 'codeguru';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
#"Этап#1. Подключение.
$pdo = new PDO($dsn, $user, $pass, $opt);