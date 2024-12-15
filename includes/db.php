<?php

$db_conf = [
'hostname' => 'localhost',
'username' => 'root',
'password' => '',
'dbname' => 'users'
];

try {
    $db = new PDO("mysql:host=" . $db_conf['hostname'] . "; dbname=" . $db_conf['dbname'] . ";", $db_conf['username'], $db_conf['password']);
    // echo "Подключение установлено";
} catch(PDOException $e) {
    // echo "Ошибка подключения:" . $e->getMessage();
}