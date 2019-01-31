<?php

// Wrap this in function

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


// Get the URI and make a neat array
$currentURI = $_SERVER['REQUEST_URI'];
$currentURI = explode("/",$currentURI);
array_shift($currentURI);
array_pop($currentURI);
var_dump($currentURI); //dump for testing purpose

// Fetching products depending on URI
if ($currentURI[0] == "petra") {
  $stmt = $pdo->query('SELECT * FROM product');
  foreach ($stmt as $row) {
    echo '<tr><td>' . $row['art_no'] . '</td>';
    echo '<td>' . $row['art_name'] . '</td>';
    echo '<td>' . $row['description'] . '</td>';
    echo '<td>' . $row['cat'] . '</td>';
    echo '<td>' . $row['price_tax'] . '</td></tr>';
  }
} else {
  print_r("something else");
}