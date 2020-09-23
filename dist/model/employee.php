<?php
//    $dsn = 'mysql:host=localhost;dbname=portfolio';
//    $username = 'root';
//    $password = 'Pa$$w0rd';
function getEmployees(){
    try {
    $db = Database::getDB();
        $query = 'SELECT * FROM minions
                           ORDER BY employeeID';
    $statement = $db->prepare($query);
    $statement->execute();
    $employees = $statement->fetchAll();
    $statement->closeCursor();
    } catch (PDOException $e) {
        include('./model/database_error.php');
    }
    return $employees;
}
?>