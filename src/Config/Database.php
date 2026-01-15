<?php

namespace App\config;
use PDO;
class Database
{
    private string $host = 'localhost';
    private string $db   = 'talent_hub_db';
    private string $user = 'root';
    private string $pass = '';
    private ?PDO $conn = null;

    public function connect(): PDO
    {
        if ($this->conn === null) {
            $dsn = "mysql:host={$this->host};dbname={$this->db};";
            $this->conn = new PDO($dsn, $this->user, $this->pass);

        }
        return $this->conn;
    }
}
