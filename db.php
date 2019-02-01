<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
extract(parse_ini_file(__DIR__ . '/.env'));

$dsn = "mysql:host=$SERVER;dbname=$DBNAME;charset=$CHARSET";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
     $pdo = new PDO($dsn, $USERNAME, $PASSWORD, $options);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
