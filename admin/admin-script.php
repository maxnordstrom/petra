<?php

// Bootstrap the database
include('../db.php');


// Get user input
$articleName = $_POST['article-name'] ?? '';
$rowToEdit =   $_POST['row-to-edit'] ?? '';
$newValue =    $_POST['new-value'] ?? '';


// // Update database
// $sql = 'UPDATE product SET' . $newValue . ' = :newValue WHERE';
// $stmt = $pdo->prepare($sql);
// $stmt->execute([
//                 'course_id'     => $courseID,
//                 'course_date'   => $courseDate,
//                 'company_name'  => $companyName,
//                 'company_phone' => $companyPhone,
//                 'company_email' => $companyEmail,
//                 'participant_name'  => $participantName,
//                 'participant_phone' => $participantPhone,
//                 'participant_email' => $participantEmail
//               ]);
