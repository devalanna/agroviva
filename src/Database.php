<?php 
namespace App;

use PDO;

class Database 
{
    private $connection = null;

    public function __construct()
    {
        $this->connect();
    }

    private function connect()
    {
        try {
            if (!$this->connection) {
                $this->connection = new PDO("mysql:host=127.0.0.1;dbname=agroviva", "root", "pipoca432");
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        } catch(\PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getConnection()
    {
        return $this->connection;
    }
}
