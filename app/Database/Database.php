<?php

namespace App\Database;

class Database 
{
    private static $pdo;
    public static function getInstance() {
        if(!isset(self::$pdo)) {
            self::$pdo = new \PDO(CONFIG['DB_DRIVE'].":dbname=".CONFIG['DB_CONNECT'].";host=".CONFIG['HOST'], CONFIG['DB_USER'], CONFIG['DB_PASSWORD'],
            array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES ".CONFIG['CHARSET']));
        }
        return self::$pdo;
    }

    private function __construct() { }
    private function __clone() { }
    private function __wakeup() { }
}