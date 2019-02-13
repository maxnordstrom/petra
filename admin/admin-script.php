<?php

// Bootstrap the database
include('../db.php');


// Get user input
$articleName = $_POST['article-name'];
$columnToEdit =   $_POST['column-to-edit'];
$newValue =    $_POST['new-value'];


// Update database
$sql = 'UPDATE product SET ' . $columnToEdit . ' = "' . $newValue . '" WHERE art_name = "' . $articleName . '"';
$pdo->query($sql);
