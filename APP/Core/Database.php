<?php

class Database
{
   
    private static $connection;
    
    public function connect()
    {
        // parse_ini_file : lit ce fichier et retourne un tableau associatif
        $params = parse_ini_file('database.ini');
        if ($params === false) {
            throw new \Exception("Error reading database configuration file");
        }
       
        // sprintf : pour formater la chaîne de connexion sous la forme requise par PDO
        $conStr = sprintf(
            "pgsql:host=%s;port=%d;dbname=%s;user=%s;password=%s",
            $params['host'],
            $params['port'],
            $params['database'],
            $params['user'],
            $params['password']
        );

        $pdo = new \PDO($conStr);
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }
   
    public static function getInstance()
    {
        if (null === self::$connection) {
            self::$connection = new self();
        }
        return self::$connection;
    }

    private function __construct() {}
    private function __clone() {}
}


?>
