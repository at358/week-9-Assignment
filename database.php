<?php
class Database {
    private static $dsn = 'mysql:host=sql2.njit.edu;dbname=bcn3_proj';
    private static $username = 'bcn3_proj';
    private static $password = 'w9hLvRFP';
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
                echo $error_message;
                exit();
            }
        }
        return self::$db;
    }
}
?>