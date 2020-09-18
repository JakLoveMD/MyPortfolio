<?php
//    $dsn = 'mysql:host=localhost;dbname=portfolio';
//    $username = 'root';
//    $password = 'Pa$$w0rd';
function getVisitorbyEmp($employeeID){
    global $db;
$queryVisitors = 'SELECT * FROM visitor
                  WHERE employeeID = :employeeID
                  ORDER BY visitor_id';
$statement3 = $db->prepare($queryVisitors);
$statement3->bindValue(':employeeID', $employeeID);
$statement3->execute();
$visitors = $statement3->fetchAll();
$statement3->closeCursor();
    return $visitors;
}
function delVisitor($visitor_id){
    global $db;
    $query = 'DELETE FROM visitor
              WHERE visitor_id = :visitor_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':visitor_id', $visitor_id);
    $success = $statement->execute();
    $statement->closeCursor();
}
function addVisitor($visitor_name, $visitor_email, $visitor_sub, $visitor_msg){
    global $db;
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
}
?>