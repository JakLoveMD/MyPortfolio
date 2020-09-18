<?php
//    $dsn = 'mysql:host=localhost;dbname=portfolio';
//    $username = 'root';
//    $password = 'Pa$$w0rd';
function getEmployees(){
    global $db;
        $query = 'SELECT * FROM minions
                           ORDER BY employeeID';
    $statement = $db->prepare($query);
    $statement->execute();
    $employees = $statement->fetchAll();
    $statement->closeCursor();
    return $employees;
}
?>