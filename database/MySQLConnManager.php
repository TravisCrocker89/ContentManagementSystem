<?php
namespace Database;

use Config\DatabaseConfig;
class MySQLConnManager
{
    private $pdo;
    private $config;

    public function __construct(array $config = null)
    {
        $this->config = DatabaseConfig::getConnInfo();
        $this->connect();
    }

    private function connect()
    {
        $dsn = "mysql:host={$this->config['host']};dbname={$this->config['dbname']};charset={$this->config['charset']}";
        try
        {
            $this->pdo = new PDO($dsn, $this->config['user'], $this->config['pass']);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e)
        {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function getConn()
    {
        return $this->pdo;
    }

    // Optional: For explicit cleanup (though PHP usually handles this)
    public function closeConn()
    {
        $this->pdo = null;
    }
}