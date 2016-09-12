<?php

class dbHandler
{

    public $dbh;
    private static $instance;

    private function __construct()
    {
        // building data source name from config
        $dsn = 'mysql:host=127.0.0.1;dbname=blog';
        $user = 'root';
        $password = 'root';

        $this->dbh = new PDO($dsn, $user, $password);
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            $object = __CLASS__;
            self::$instance = new $object;
        }
        return self::$instance;
    }
}