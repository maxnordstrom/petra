<?php

// Bootstrap the database
include('../db.php');


// Get user input
$articleName = $_POST['article-name'];
$columnToEdit =   $_POST['column-to-edit'];
$newValue =    $_POST['new-value'];


// Set placeholders
$vars = [
  'newValue'     => $newValue,
  'articleName'  => $articleName
];


// Update database
$sql = 'UPDATE product SET ' . $columnToEdit . ' = :newValue WHERE art_name = :articleName';
$stmt = $pdo->prepare($sql);
$stmt->execute($vars);




// Sätt in en if statement som kollar att $_POST inte är tom
// Fixa scroll på tabellen vid mindre skärm
