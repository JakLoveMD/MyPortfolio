<?php
require_once('database.php');

// Get IDs
$visitor_id = filter_input(INPUT_POST, 'visitor_id', FILTER_VALIDATE_INT);
$employeeID = filter_input(INPUT_POST, 'employeeID', FILTER_VALIDATE_INT);

// Delete the product from the database
if ($visitor_id != false) {
    $query = 'DELETE FROM visitor
              WHERE visitor_id = :visitor_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':visitor_id', $visitor_id);
    $success = $statement->execute();
    $statement->closeCursor();    
}

// Display the Product List page
include('admin.php');

