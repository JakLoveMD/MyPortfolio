<?php
//Sept 23 2020: added static calls to get DB() and Try/Catch.
//    $dsn = 'mysql:host=localhost;dbname=portfolio';
//    $username = 'root';
//    $password = 'Pa$$w0rd';
function getVisitorbyEmp($employeeID){
    try {
    $db = Database::getDB();
    //global $db;
$queryVisitors = 'SELECT * FROM visitor
                  WHERE employeeID = :employeeID
                  ORDER BY visitor_id';
$statement3 = $db->prepare($queryVisitors);
$statement3->bindValue(':employeeID', $employeeID);
$statement3->execute();
$visitors = $statement3->fetchAll();
$statement3->closeCursor();
    } catch (PDOException $e) {
        include('./model/database_error.php');
    }
    return $visitors;
}
function delVisitor($visitor_id){
    try {
    $db = Database::getDB();
    $query = 'DELETE FROM visitor
              WHERE visitor_id = :visitor_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':visitor_id', $visitor_id);
    $success = $statement->execute();
    $statement->closeCursor();
    } catch (PDOException $e) {
        include('./model/database_error.php');
    }
}
function addVisitor($visitor_name, $visitor_email, $visitor_sub, $visitor_msg){
    try {
    $db = Database::getDB();
    $query = 'INSERT INTO visitor
                         (visitor_name, visitor_email, visitor_sub, visitor_msg, visit_date, employeeID)
                      VALUES
                         (:visitor_name, :visitor_email, :visitor_sub, :visitor_msg, NOW(), 1)';
            $statement = $db->prepare($query);
            $statement->bindValue(':visitor_name', $visitor_name);
            $statement->bindValue(':visitor_email', $visitor_email);
            $statement->bindValue(':visitor_sub', $visitor_sub);
            $statement->bindValue(':visitor_msg', $visitor_msg);
            $statement->execute();
            $statement->closeCursor();
        } catch (PDOException $e) {
        include('./model/database_error.php');
    }
}
?>