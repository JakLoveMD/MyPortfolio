<?php
class Database {
    private static $dsn = 'mysql:host=localhost;dbname=portfolio'; //changed db
    private static $username = 'root';                              //changed user
    private static $password = 'Pa$$w0rd';                          //changed pw
    private static $db;

    private function __construct() {}

    public static function getDB () {
        if (!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dsn,
                                     self::$username,
                                     self::$password);
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                include('database_error.php');
                exit();
            }
        }
        return self::$db;
    }
}
?>