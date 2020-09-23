<?php
function add_admin($email, $password) {
    $db=Database::getDB();
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $query = 'INSERT INTO administrators (emailAddress, password)
              VALUES (:email, :password)';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $hash);
    $statement->execute();
    $statement->closeCursor();
}

function is_valid_admin_login($email, $password) {
    $db=Database::getDB();
    $query = 'SELECT password FROM administrators
              WHERE emailAddress = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $row = $statement->fetch();
    $statement->closeCursor();
    if (isset($row['password'])) {
        $hash = $row['password'];
    } else {
        $hash = false;
    }
//    if (($row['password'])== false || is_null($row['password'])) {
//        $hash = '';
//    } else {
//    $hash = $row['password'];
//    }
    return password_verify($password, $hash);
}
?>