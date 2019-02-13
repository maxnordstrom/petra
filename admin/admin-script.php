<?php

// Bootstrap the database
include('../db.php');


// Get user input
$articleName = $_POST['article-name'] ?? '';
$rowToEdit =   $_POST['row-to-edit'] ?? '';
$newValue =    $_POST['new-value'] ?? '';


// Update database
$sql = 'UPDATE product SET ' . $newValue . ' = :newVal WHERE ' . $rowToEdit . ' = :rowToEdit AND ' . $articleName . ' = :articleName';
$stmt = $pdo->prepare($sql);
$stmt->execute([
                'newVal'     => $newValue,
                'articleName'   => $articleName,
                'rowToEdit'  => $rowToEdit,
              ]);
