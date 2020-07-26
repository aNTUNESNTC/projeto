<?php
class PDOConnection {

    private static $instance = null;
    private $dbname = 'projeto';
    private $host = 'localhost';

    public static function getInstance()
    {
        if(is_null(self::$instance)) {
            try {
                self::$instance = new PDO("mysql:dbname=projeto;host=localhost", "root", "mortadela1");
            } catch (PDOException $e) {
                echo 'Connection failed: ' . $e->getMessage();
            }
        }
        return self::$instance;
    }
}
