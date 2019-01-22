<?php

try {
  $conn = new PDO("mysql:host=$server;dbname=$name", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $statement = $conn->query("SELECT * FROM product");
  $result = $statement->fetch();
  var_dump($result);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

?>