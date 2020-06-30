<?php 

namespace Source\Models;

use PDO;
use PDOException;

class Database extends PDO{
    private $conn;

    private string $host = "localhost";
    private string $dbName = "login";
    private string $password = "Ralph@2411";
    private string $user = "vini";

    public function connect():PDO{
        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->dbName}", $this->user, $this->password, [
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                PDO::ATTR_CASE => PDO::CASE_NATURAL
            ]);
            return $this->conn;
        } catch (PDOException $e) {
            echo "Connection error: ".$e->getMessage();
        }
    }
}